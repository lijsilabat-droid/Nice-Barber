# Nice Barber Shop Website - Laravel Setup Guide

This is a complete Laravel website for Nice Barber Shop in Bahir Dar, Ethiopia. This guide will help you set up the project from scratch.

## 📋 Requirements

- PHP 8.1 or higher
- Composer (PHP package manager)
- Node.js & npm (for frontend assets)
- MySQL or any supported database
- Git (optional)

## 🚀 Installation Steps

### Step 1: Create Laravel Project

If you don't have an existing Laravel project, create one:

```bash
composer create-project laravel/laravel nice-barber-shop
cd nice-barber-shop
```

### Step 2: Copy Project Files

Copy all the files from the provided folder into your Laravel project:

1. **Copy Migration File**
   ```bash
   cp database/migrations/2024_01_01_create_bookings_table.php database/migrations/
   ```

2. **Copy Model File**
   ```bash
   cp app/Models/Booking.php app/Models/
   ```

3. **Copy Controller File**
   ```bash
   cp app/Http/Controllers/BarberController.php app/Http/Controllers/
   ```

4. **Copy Routes File**
   - Replace the content of `routes/web.php` with the provided web.php

5. **Copy Blade Templates**
   ```bash
   cp resources/views/layouts/app.blade.php resources/views/layouts/
   cp resources/views/index.blade.php resources/views/
   cp resources/views/services.blade.php resources/views/
   cp resources/views/team.blade.php resources/views/
   cp resources/views/booking.blade.php resources/views/
   cp resources/views/contact.blade.php resources/views/
   cp resources/views/queue.blade.php resources/views/
   ```

### Step 3: Configure Database

1. **Edit `.env` file**
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nice_barber
   DB_USERNAME=root
   DB_PASSWORD=
   ```

   Update with your database credentials.

2. **Create database**
   ```bash
   mysql -u root -p
   CREATE DATABASE nice_barber;
   EXIT;
   ```

### Step 4: Run Migrations

Execute the database migration to create the bookings table:

```bash
php artisan migrate
```

This will create the `bookings` table with all necessary columns for queue management.

### Step 5: Install Dependencies

Install PHP dependencies using Composer:

```bash
composer install
```

### Step 6: Generate Application Key

```bash
php artisan key:generate
```

### Step 7: Build Frontend Assets

Install and build frontend assets with npm:

```bash
npm install
npm run dev
```

For production:
```bash
npm run build
```

### Step 8: Start the Application

Start the Laravel development server:

```bash
php artisan serve
```

The application will be available at: **http://localhost:8000**

## 📁 Project Structure

```
nice-barber-shop/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── BarberController.php      # Main controller
│   └── Models/
│       └── Booking.php                   # Booking model
├── database/
│   └── migrations/
│       └── 2024_01_01_create_bookings_table.php
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php             # Main layout
│       ├── index.blade.php               # Home page
│       ├── services.blade.php            # Services page
│       ├── team.blade.php                # Team page
│       ├── booking.blade.php             # Booking form
│       ├── contact.blade.php             # Contact page
│       └── queue.blade.php               # Queue management
├── routes/
│   └── web.php                           # Routes definition
├── public/                               # Public assets
└── .env                                  # Environment config
```

## 🎨 Customization

### Business Information

To customize business details, edit `app/Http/Controllers/BarberController.php`:

```php
$businessInfo = [
    'name' => 'Nice Barber',
    'location' => 'Bahir Dar, in front of the Stadium',
    'phone' => '0918289788',
    'open_time' => '08:00 AM',
    'close_time' => '06:00 PM',
];
```

### Styles & Services

Modify services and prices in the controller:

```php
$services = [
    [
        'name' => 'Regular Haircut',
        'price' => 300,
        // ...
    ],
];
```

### Colors & Branding

Edit the CSS in `resources/views/layouts/app.blade.php`:

```css
body {
    background-color: #ffffff;
    color: #1a1a1a;
}

.btn-primary {
    background-color: #1a1a1a;
    color: #ffffff;
}
```

## 🔌 Key Routes

| Route | Purpose |
|-------|---------|
| `/` | Home page |
| `/services` | Services listing |
| `/team` | Team members |
| `/booking` | Booking form |
| `/contact` | Contact information |
| `/queue` | Queue management (staff) |
| `/queue-status/{queueNumber}` | Check queue status (AJAX) |

## 💾 Database Schema

### Bookings Table

```sql
CREATE TABLE bookings (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    customer_name VARCHAR(255),
    phone_number VARCHAR(20),
    service VARCHAR(255),
    price DECIMAL(8, 2),
    queue_number VARCHAR(255) UNIQUE,
    status ENUM('pending', 'in_progress', 'completed', 'cancelled'),
    booking_date DATETIME,
    position_in_queue INT,
    created_at TIMESTAMP,
    updated_at TIMESTAMP,
    INDEX(queue_number),
    INDEX(status),
    INDEX(booking_date)
);
```

## 🔐 Security Notes

For production deployment:

1. **Update `.env`**
   - Set `APP_DEBUG=false`
   - Use a strong `APP_KEY`
   - Configure proper database credentials

2. **CSRF Protection**
   - All forms include CSRF tokens automatically
   - Keep token verification enabled

3. **Input Validation**
   - All user inputs are validated
   - Database queries use parameterized statements

4. **Backups**
   - Regular database backups recommended
   - Use version control for code

## 🎯 Features Implemented

✅ Modern, responsive clean white minimalist design
✅ Home page with hero section and features
✅ Services page with pricing in ETB
✅ Team page showcasing barbers
✅ Booking form with real-time queue number generation
✅ Queue management system for staff
✅ Contact page with location details
✅ Direct phone and Telegram links
✅ Fully responsive for mobile & desktop
✅ AJAX form submission
✅ Database migrations
✅ Queue number generation (Q-YYYYMMDD-XXXX format)
✅ Amharic language support

## 📞 Support & Maintenance

### Adding New Services

1. Update services in `BarberController.php`
2. Update booking form options
3. Update services page display

### Modifying Prices

Edit the price arrays in:
- `BarberController.php` (services method)
- `BarberController.php` (storeBooking method)
- Blade templates

### Backup Database

```bash
mysqldump -u root -p nice_barber > backup_$(date +%Y%m%d_%H%M%S).sql
```

## 🚀 Deployment

For deploying to production server:

1. **Using cPanel/Shared Hosting**
   - Upload files to public_html
   - Set permissions (755 for folders, 644 for files)
   - Update database configuration

2. **Using DigitalOcean/AWS**
   - Configure server environment
   - Install PHP, MySQL, Node.js
   - Follow installation steps above
   - Use Nginx or Apache as web server

3. **Using Docker**
   ```bash
   docker-compose up -d
   ```

## 📝 Amharic Language Support

The site includes Amharic translations for:
- Service names
- Style names
- Location descriptions
- Team specialties

Add more Amharic text by updating blade templates.

## 🐛 Troubleshooting

### Issue: Migrations not running
```bash
php artisan migrate:fresh
php artisan migrate
```

### Issue: Assets not loading
```bash
php artisan storage:link
npm run build
```

### Issue: Database connection error
- Verify MySQL is running
- Check `.env` database credentials
- Ensure database exists

### Issue: Permission errors
```bash
chmod -R 775 storage bootstrap/cache
```

## 📚 Additional Resources

- [Laravel Documentation](https://laravel.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [Font Awesome Icons](https://fontawesome.com)

## 📄 License

This project is built for Nice Barber Shop, Bahir Dar, Ethiopia.

---

**Need Help?**
Contact: 0918289788 (WhatsApp/Telegram)
Email: nicebarber@email.com
