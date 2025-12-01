# SMA Negeri 1 Contoh - Laravel Blade Template

## Template Structure

This is a Laravel front-end template designed to be imported into a CMS dashboard system. It includes 7 complete pages with responsive design and database integration.

## Directory Structure

```
template/
├─ resources/
│  └─ views/
│     ├─ layouts/
│     │  └─ main.blade.php          ← Main layout
│     ├─ partials/
│     │  └─ navbar.blade.php        ← Database-driven navbar
│     ├─ home.blade.php              ← Homepage
│     ├─ tentang.blade.php           ← About page
│     ├─ program.blade.php           ← Programs page
│     ├─ berita.blade.php            ← News listing
│     ├─ galeri.blade.php            ← Gallery
│     ├─ kontak.blade.php            ← Contact page
│     └─ ppdb.blade.php              ← Admission page
├─ app/
│  └─ Http/
│     └─ Controllers/
│        └─ Template/
│           └─ SchoolController.php  ← Main controller
├─ routes/
│  └─ web.php                        ← Route definitions
└─ public/
   ├─ css/
   │  └─ style.css                   ← All styling
   ├─ js/
   │  └─ main.js                     ← Interactive features
   └─ images/
      └─ (placeholder references)
```

## Features

### 1. Complete Page Set
- **Home (/)**: Hero banner, core values, gallery, testimonials, news, CTA
- **Tentang (/tentang)**: School profile, vision/mission, history timeline
- **Program (/program)**: Academic programs, character building, extracurricular
- **Berita (/berita)**: News listing with category filtering and pagination
- **Galeri (/galeri)**: Photo gallery with lightbox modal
- **Kontak (/kontak)**: Contact form with validation, Google Maps integration
- **PPDB (/ppdb)**: Admission information, timeline, requirements, FAQ

### 2. Database-Driven Navigation
- The navbar uses the existing CMS `menus` table via `DB::table()`
- Expected fields: `id`, `name`, `slug`, `location`, `sort_order`, `is_active`
- Queries for `location = 'primary'` and `is_active = 1`
- Fallback static menu included if database is empty

### 3. Responsive Design
- Mobile-first approach
- Hamburger menu for mobile devices
- Breakpoints: 768px (tablet), 480px (mobile)
- Touch-friendly interactive elements

### 4. Interactive Features
- **Gallery Lightbox**: Zoom images with keyboard navigation
- **News Filters**: Category-based filtering (all, prestasi, kegiatan, pengumuman, akademik)
- **FAQ Accordion**: Expandable/collapsible questions
- **Form Validation**: Client and server-side validation
- **Smooth Scrolling**: Anchor link animations

### 5. Color Scheme
- Primary: #003b73 (Dark Blue)
- Secondary: #0074D9 (Blue)
- Accent: #FFD700 (Gold/Yellow)
- Background: #ffffff (White)
- Footer: #001f3f (Dark Blue)

## Installation Instructions

### 1. Import into Laravel CMS

Copy the template files into your Laravel CMS project:

```bash
# Copy view files
cp -r template/resources/views/* your-laravel-cms/resources/views/

# Copy assets
cp -r template/public/css your-laravel-cms/public/
cp -r template/public/js your-laravel-cms/public/

# Optional: Copy controller and routes (if CMS allows custom routing)
cp -r template/app/Http/Controllers/Template your-laravel-cms/app/Http/Controllers/
# Merge template/routes/web.php with your-laravel-cms/routes/web.php
```

**Note:** This template does NOT include migrations or models. It integrates with your existing CMS database structure.

### 2. Required Database Tables

Ensure your CMS has these tables:

**menus** (for navigation):
```sql
- name (string)
- slug (string)
- location (string) # 'primary' for main nav
- sort_order (integer)
- is_active (boolean)
```

**posts/news** (for news page - optional):
```sql
- title, slug, category, excerpt, content
- image, author, created_at, status
```

**gallery** (for gallery page - optional):
```sql
- title, image, album, is_active
```

**contact_messages** (for contact form - optional):
```sql
- name, email, phone, subject, message
- status, created_at
```

### 3. Add Placeholder Images

Create placeholder images in `public/images/`:
- hero.jpg, logo.png, favicon.ico
- gallery-1.jpg to gallery-6.jpg
- testimonial-1.jpg to testimonial-3.jpg
- news-1.jpg to news-3.jpg

You can use stock photos or generate placeholders using services like:
- https://placeholder.com/
- https://picsum.photos/
- https://placehold.co/

### 4. Font Awesome

Font Awesome is already included via CDN in `main.blade.php`:

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

### 5. Test the Template

Start your Laravel development server:

```bash
php artisan serve
```

Visit routes:
- http://localhost:8000/ (Home)
- http://localhost:8000/tentang (About)
- http://localhost:8000/program (Programs)
- http://localhost:8000/berita (News)
- http://localhost:8000/galeri (Gallery)
- http://localhost:8000/kontak (Contact)
- http://localhost:8000/ppdb (Admission)

### 6. Customize and Integrate

**Colors:**
Edit CSS variables in `public/css/style.css`:

```css
:root {
    --primary-color: #003b73;
    --secondary-color: #0074D9;
    --accent-color: #FFD700;
    /* Customize as needed */
}
```

**Content:**
- Edit views in `resources/views/`
- Update controller logic in `app/Http/Controllers/Template/SchoolController.php`
- Replace static data with dynamic database queries

**Menu:**
Manage via your CMS dashboard using the existing `menus` table with `location = 'primary'`

## CMS Integration Guide

For complete CMS integration instructions, see **[CMS_INTEGRATION.md](CMS_INTEGRATION.md)**

### Quick Integration Points

This template expects your CMS to have a `menus` table with these columns:
- `name` (string) - Display name
- `slug` (string) - URL slug
- `location` (string) - Menu location identifier (use 'primary' for main navbar)
- `sort_order` (integer) - Display order
- `is_active` (boolean/tinyint) - Active status

### Database Query Used

```php
DB::table('menus')
    ->where('location', 'primary')
    ->where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();
```

If your CMS uses different column names, edit `resources/views/partials/navbar.blade.php` accordingly.

### Extending the Template

#### Add New Pages

1. Create a new view in `resources/views/`
2. Add a method in `app/Http/Controllers/Template/SchoolController.php`
3. Add a route in `routes/web.php`

Example:

```php
// Controller method (SchoolController.php)
public function alumni(): View
{
    return view('alumni');
}

// Route (web.php)
Route::get('/alumni', [SchoolController::class, 'alumni'])->name('alumni');
```

#### Customize Styles

Edit `public/css/style.css` to modify:
- Color variables in `:root`
- Section spacing and layout
- Typography and fonts
- Component styles (buttons, cards, forms)

#### Replace Static Content with Dynamic Data

The template uses placeholder static arrays. Replace them with CMS database queries:

**Before:**
```php
@php
    $newsList = [
        ['title' => 'Static News', ...],
    ];
@endphp
```

**After:**
```php
@php
    $newsList = DB::table('posts')
        ->where('status', 'published')
        ->latest()
        ->paginate(9);
@endphp
```

## Technology Stack

- **Framework:** Laravel 11.x
- **Template Engine:** Blade
- **CSS:** Vanilla CSS (no framework)
- **JavaScript:** Vanilla JS
- **Icons:** Font Awesome 6.4.0
- **Database:** Laravel Query Builder (DB::table)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Files Overview

| File | Purpose |
|------|---------|
| `resources/views/layouts/main.blade.php` | Master layout |
| `resources/views/partials/navbar.blade.php` | Dynamic navigation |
| `resources/views/home.blade.php` | Homepage |
| `resources/views/tentang.blade.php` | About page |
| `resources/views/program.blade.php` | Programs showcase |
| `resources/views/berita.blade.php` | News listing |
| `resources/views/galeri.blade.php` | Photo gallery |
| `resources/views/kontak.blade.php` | Contact form |
| `resources/views/ppdb.blade.php` | Admission info |
| `app/Http/Controllers/Template/SchoolController.php` | Main controller |
| `routes/web.php` | All route definitions |
| `public/css/style.css` | All styling |
| `public/js/main.js` | Interactive features |

## Notes

- This template uses **vanilla CSS** (no Tailwind or Bootstrap)
- Font Awesome is included via CDN
- Images are placeholder references - replace with actual images
- **No migrations/models included** to avoid CMS conflicts
- Compatible with Laravel 11+ (uses latest conventions)
- Mobile navigation is fully functional with JavaScript
- All sections are modular and can be easily customized

## Credits

Design inspired by: https://smam1ta.sch.id/
School: SMA Negeri 1 Contoh

## License

This template is provided for use with the CMS dashboard system.

## Support & Documentation

- **CMS Integration Guide:** See [CMS_INTEGRATION.md](CMS_INTEGRATION.md)
- **Installation Guide:** See [INSTALLATION.md](INSTALLATION.md)
- **File Structure:** See [STRUCTURE.md](STRUCTURE.md)

---

**Template Version:** 3.0 (CMS-Ready)
**Last Updated:** December 1, 2025
**Repository:** https://github.com/Kluvien/template_web_laravel_learning.git

