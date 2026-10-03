FROM php:8.3-apache

# Safe production defaults; Render dashboard values can override these.
ENV APP_ENV=production \
    APP_DEBUG=false \
    DB_CONNECTION=sqlite \
    DB_DATABASE=/var/data/database.sqlite \
    CACHE_STORE=file \
    SESSION_DRIVER=file \
    LOG_CHANNEL=stderr

# Install Laravel's required PHP extensions and SQLite/MySQL PDO drivers.
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Install locked production dependencies before copying the rest of the source.
COPY composer.json composer.lock ./
RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader \
    --no-scripts

COPY . .

# Generate the optimized autoloader and run Laravel's package discovery now
# that artisan and the application source are present.
RUN composer dump-autoload --no-dev --optimize \
    && test -f /var/www/html/vendor/autoload.php

# Serve Laravel through Apache's public directory and enable .htaccess routing.
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && printf '<Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n</Directory>\n' > /etc/apache2/conf-available/laravel-public.conf \
    && a2enconf laravel-public \
    && a2enmod rewrite \
    && mkdir -p /var/www/html/storage/framework/cache/data /var/www/html/storage/framework/sessions /var/www/html/storage/framework/views /var/www/html/storage/logs /var/data \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

COPY docker/apache-entrypoint.sh /usr/local/bin/apache-entrypoint

EXPOSE 10000

CMD ["sh", "/usr/local/bin/apache-entrypoint"]
