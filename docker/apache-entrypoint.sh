#!/bin/sh
set -eu

if [ "${APP_ENV:-production}" = "production" ] && [ -z "${APP_KEY:-}" ]; then
    echo "ERROR: APP_KEY is required in production. Set it as a Render secret (do not put it in the image)." >&2
    exit 1
fi

if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
    database_path="${DB_DATABASE:-/var/data/database.sqlite}"
    database_directory=$(dirname "$database_path")
    mkdir -p "$database_directory"
    touch "$database_path"
    chown www-data:www-data "$database_directory" "$database_path"
    chmod 770 "$database_directory"
    chmod 660 "$database_path"
fi

php artisan migrate --force --no-interaction

port="${PORT:-10000}"
case "$port" in
    ''|*[!0-9]*)
        echo "PORT must be a numeric TCP port" >&2
        exit 1
        ;;
esac

sed -ri "s/^Listen [0-9]+$/Listen ${port}/" /etc/apache2/ports.conf
sed -ri "s#<VirtualHost \\*:[0-9]+>#<VirtualHost *:${port}>#" /etc/apache2/sites-available/000-default.conf

exec apache2-foreground