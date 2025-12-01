# Laravel Blade Template - Installation Guide

## Quick Start

This template is ready to be imported into your Laravel CMS dashboard system. It includes 7 complete pages with responsive design and database integration.

### Important Note

**This template does NOT include:**
- Database migrations (no schema changes)
- Eloquent models
- Database seeders

**Why?** Your CMS already has its own database structure and management system. This template integrates with your existing tables using `DB::table()` queries.

### Prerequisites

- Laravel 11.x or higher
- PHP 8.1 or higher
- Composer installed
- Existing Laravel CMS with `menus` table

---

## Installation Steps

### Step 1: Verify CMS Database Tables

Ensure your CMS has a `menus` table with these columns:

| Column | Type | Description |
|--------|------|-------------|
| `name` | string | Display name |
| `slug` | string | URL slug |
| `location` | string | Menu location (use 'primary') |
| `sort_order` | integer | Display order |
| `is_active` | boolean | Active status |

**Optional tables** for dynamic content:
- `posts` or `news` - For news page
- `gallery` - For gallery page
- `contact_messages` - For contact form storage

### Step 2: Extract Template Files

Extract the template ZIP and copy files to your Laravel CMS:

```bash
# Copy all view files
cp -r template/resources/views/* your-laravel-cms/resources/views/

# Copy controller
cp -r template/app/Http/Controllers/Template your-laravel-cms/app/Http/Controllers/

# Copy assets
cp -r template/public/css your-laravel-cms/public/
cp -r template/public/js your-laravel-cms/public/

# Merge routes (or manually add routes from template/routes/web.php)
```

### Step 3: Verify Template Files

**Views (7 pages + layout):**
- ✓ resources/views/layouts/main.blade.php
- ✓ resources/views/partials/navbar.blade.php
- ✓ resources/views/home.blade.php
- ✓ resources/views/tentang.blade.php
- ✓ resources/views/program.blade.php
- ✓ resources/views/berita.blade.php
- ✓ resources/views/galeri.blade.php
- ✓ resources/views/kontak.blade.php
- ✓ resources/views/ppdb.blade.php

**Controller:**
- ✓ app/Http/Controllers/Template/SchoolController.php

**Routes:**
- ✓ routes/web.php (merge with existing routes)

**Assets:**
- ✓ public/css/style.css
- ✓ public/js/main.js

**Note:** No migrations, models, or seeders included to avoid CMS conflicts.

### Step 4: Update Routes

Add these routes to your `routes/web.php`:

```php
use App\Http\Controllers\Template\SchoolController;

Route::get('/', [SchoolController::class, 'home'])->name('home');
Route::get('/tentang', [SchoolController::class, 'tentang'])->name('tentang');
Route::get('/program', [SchoolController::class, 'program'])->name('program');
Route::get('/berita', [SchoolController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [SchoolController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/galeri', [SchoolController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [SchoolController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [SchoolController::class, 'kontakSubmit'])->name('kontak.submit');
Route::get('/ppdb', [SchoolController::class, 'ppdb'])->name('ppdb');
```

### Step 5: Font Awesome (Already Included)

Font Awesome is already included via CDN in `main.blade.php`:

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

No additional setup required.

### Step 6: Add Images

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

Or use this PowerShell command to create the directory:
```powershell
New-Item -ItemType Directory -Force -Path public/images
```

### Step 7: Test the Template

Start your Laravel development server:

```bash
php artisan serve
```

**Test all pages:**
- http://localhost:8000/ (Home)
- http://localhost:8000/tentang (About)
- http://localhost:8000/program (Programs)
- http://localhost:8000/berita (News)
- http://localhost:8000/galeri (Gallery)
- http://localhost:8000/kontak (Contact)
- http://localhost:8000/ppdb (Admission)

### Step 8: Populate CMS Menus Table

Add menu items to your CMS `menus` table:

```sql
INSERT INTO menus (name, slug, location, sort_order, is_active) VALUES
('Beranda', '/', 'primary', 1, 1),
('Tentang', '/tentang', 'primary', 2, 1),
('Program', '/program', 'primary', 3, 1),
('Berita', '/berita', 'primary', 4, 1),
('Galeri', '/galeri', 'primary', 5, 1),
('PPDB', '/ppdb', 'primary', 6, 1),
('Kontak', '/kontak', 'primary', 7, 1);
```

Or manage via your CMS dashboard if available.

---

## Customization

### Step 9: Customize Colors

Edit CSS variables in `public/css/style.css`:

```css
:root {
    --primary-color: #003b73;
    --secondary-color: #0074D9;
    --accent-color: #FFD700;
    /* Customize as needed */
}
```

### Step 10: Customize Content

**Update school information:**
- Edit `resources/views/layouts/main.blade.php` (footer section)
- Edit `resources/views/home.blade.php` (hero section, core values)
- Edit `resources/views/tentang.blade.php` (vision/mission, history)
- Edit `resources/views/kontak.blade.php` (contact information, Google Maps)

**Replace static data with CMS database queries:**

See [CMS_INTEGRATION.md](CMS_INTEGRATION.md) for detailed instructions on connecting to your CMS database tables.

### Step 11: Manage Navigation

Manage menu items via your CMS dashboard or directly in the `menus` table. Ensure menu items have:
- `location = 'primary'` for main navbar
- `is_active = 1` to display
- `sort_order` for ordering

---

## CMS Database Integration

### Navbar Integration

The navbar queries your CMS database using:

```php
DB::table('menus')
    ->where('location', 'primary')
    ->where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();
```

If your CMS uses different column names, edit `resources/views/partials/navbar.blade.php`.

### Expected Menus Table Structure

Your CMS should have a `menus` table with at least these columns:

| Column      | Type    | Description                      |
|-------------|---------|----------------------------------|
| id          | bigint  | Primary key                      |
| name        | string  | Display name                     |
| slug        | string  | URL slug                         |
| location    | string  | Menu location (use 'primary')    |
| sort_order  | integer | Display order                    |
| is_active   | boolean | Active status (0 or 1)           |

### Optional Tables for Dynamic Content

**posts/news** (for dynamic news page):
```sql
CREATE TABLE posts (
    id BIGINT PRIMARY KEY,
    title VARCHAR(255),
    slug VARCHAR(255),
    category VARCHAR(100),
    excerpt TEXT,
    content TEXT,
    image VARCHAR(255),
    author VARCHAR(100),
    created_at TIMESTAMP,
    status VARCHAR(50)
);
```

**gallery** (for dynamic gallery page):
```sql
CREATE TABLE gallery (
    id BIGINT PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    album VARCHAR(100),
    is_active BOOLEAN
);
```

**contact_messages** (for contact form submissions):
```sql
CREATE TABLE contact_messages (
    id BIGINT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    phone VARCHAR(50),
    subject VARCHAR(255),
    message TEXT,
    status VARCHAR(50),
    created_at TIMESTAMP
);
```

---

## Troubleshooting

### Issue: Navbar is Empty

**Solution:** Ensure your `menus` table has items with `location = 'primary'` and `is_active = 1`.

### Issue: CSS Not Loading

**Solution:** Run `php artisan storage:link` and clear cache:
```bash
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

### Issue: Images Not Displaying

**Solution:** Verify images exist in `public/images/` directory and use correct paths with `asset()` helper.

### Issue: Routes Not Working

**Solution:** Clear route cache:
```bash
php artisan route:clear
php artisan route:cache
```

---

## Next Steps

1. **Read CMS_INTEGRATION.md** for detailed CMS integration instructions
2. **Customize views** with your school's actual content
3. **Replace placeholder images** with real photos
4. **Connect to CMS database** for dynamic content
5. **Test all pages** thoroughly before production

---

## Support & Documentation

- **Main Documentation:** [README.md](README.md)
- **CMS Integration Guide:** [CMS_INTEGRATION.md](CMS_INTEGRATION.md)
- **File Structure:** [STRUCTURE.md](STRUCTURE.md)

---

**Template Version:** 3.0 (CMS-Ready)
**Last Updated:** December 1, 2025

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
