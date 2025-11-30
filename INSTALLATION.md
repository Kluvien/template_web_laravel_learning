# Laravel Blade Template - Installation Guide

## Quick Start

This template is ready to be imported into your Laravel CMS dashboard system.

### Important Note

**This template does NOT include:**
- Database migrations for menus
- Menu model
- Menu seeders

**Why?** Your CMS already has its own `menus` table and menu management system. This template integrates with your existing database structure.

### Step 1: Verify CMS Menu Table

Ensure your CMS has a `menus` table with these columns:
- `name` (string) - Display name
- `slug` (string) - URL slug
- `location` (string) - Menu location (set to 'primary' for navbar)
- `sort_order` (integer) - Display order
- `is_active` (boolean/tinyint) - Active status

### Step 2: Verify Files

Ensure all files are in place:

**Views:**
- ✓ resources/views/layouts/main.blade.php
- ✓ resources/views/partials/navbar.blade.php
- ✓ resources/views/home.blade.php

**Controllers:**
- ✓ app/Http/Controllers/TemplatePageController.php (optional)

**Routes:**
- ✓ routes/web.php (optional)

**Assets:**
- ✓ public/css/style.css
- ✓ public/js/main.js

**Note:** No database migrations, models, or seeders are included. This template uses your existing CMS database.

### Step 3: Add Font Awesome (Optional)

Add this line to `resources/views/layouts/main.blade.php` in the `<head>` section:

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

### Step 4: Add Images

Place your images in `public/images/`:

**Required Images:**
- logo.png (navbar logo)
- favicon.ico (browser icon)
- hero.jpg (hero section background)
- gallery-1.jpg through gallery-6.jpg
- testimonial-1.jpg through testimonial-3.jpg
- news-1.jpg through news-3.jpg

**Temporary Placeholders:**
You can use placeholder services:
```html
https://placehold.co/1920x1080/003b73/FFF?text=Hero
https://placehold.co/600x400/003b73/FFF?text=Gallery
```

### Step 5: Test the Template

Start your Laravel development server:

```bash
php artisan serve
```

Visit: http://localhost:8000

### Step 6: Customize

**Colors:**
Edit CSS variables in `public/css/style.css`:

```css
:root {
    --primary-color: #003b73;
    --accent-color: #FFD700;
    /* Customize as needed */
}
```

**Content:**
Edit sections in `resources/views/home.blade.php`

**Menu:**
Manage via your CMS dashboard using the `menus` table. Ensure menu items have:
- `location = 'primary'` for main navbar
- `is_active = 1` to display
- `sort_order` for ordering

## CMS Menu Integration

The navbar queries your CMS database using:

```php
DB::table('menus')
    ->where('location', 'primary')
    ->where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();
```

If your CMS uses different column names, edit `resources/views/partials/navbar.blade.php`.

## Database Schema

### Expected Menus Table Structure

Your CMS should have a `menus` table with at least these columns:

| Column      | Type    | Description                      |
|-------------|---------|----------------------------------|
| id          | bigint  | Primary key                      |
| name        | string  | Display name                     |
| slug        | string  | URL slug                         |
| location    | string  | Menu location ('primary', etc.)  |
| sort_order  | integer | Display order                    |
| is_active   | boolean | Active status (1 = active)       |

## Troubleshooting

**Issue: Menu not showing**
- Check CMS database connection
- Verify `menus` table exists with correct columns
- Ensure menu items have `location = 'primary'` and `is_active = 1`
- Check `resources/views/partials/navbar.blade.php` query matches your schema

**Issue: Styles not loading**
- Clear cache: `php artisan cache:clear`
- Check asset path: `{{ asset('css/style.css') }}`
- Run: `php artisan storage:link` if needed

**Issue: Images not displaying**
- Verify images exist in `public/images/`
- Check file permissions
- Clear browser cache

## Support

For questions or issues, refer to the main README.md file.
