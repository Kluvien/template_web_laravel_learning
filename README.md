# SMA Muhammadiyah 1 Taman - Laravel Blade Template

## Template Structure

This is a Laravel front-end template designed to be imported into a CMS dashboard system.

## Directory Structure

```
template/
├─ resources/
│  └─ views/
│     ├─ layouts/
│     │  └─ main.blade.php
│     ├─ partials/
│     │  └─ navbar.blade.php
│     └─ home.blade.php
├─ app/
│  └─ Http/
│     └─ Controllers/
│        └─ TemplatePageController.php (optional)
├─ routes/
│  └─ web.php (optional)
└─ public/
   ├─ css/
   │  └─ style.css
   ├─ js/
   │  └─ main.js
   └─ images/
      └─ (placeholder references)
```

## Features

### 1. Database-Driven Navigation
- The navbar uses the existing CMS `menus` table via `DB::table()`
- Expected fields: `id`, `name`, `slug`, `location`, `sort_order`, `is_active`
- Queries for `location = 'primary'` and `is_active = 1`
- Fallback static menu included if database is empty

### 2. Responsive Design
- Mobile-first approach
- Hamburger menu for mobile devices
- Breakpoints: 768px (tablet), 480px (mobile)

### 3. Home Page Sections
- **Hero Section**: Banner with call-to-action buttons
- **Core Values**: 4-column grid showcasing school values
- **Gallery**: 6-item grid with hover effects
- **Testimonials**: Student and parent testimonials
- **News**: Latest news grid with category tags
- **CTA Section**: Call-to-action for PPDB registration

### 4. Color Scheme
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
cp template/app/Http/Controllers/TemplatePageController.php your-laravel-cms/app/Http/Controllers/
cp template/routes/web.php your-laravel-cms/routes/
```

**Note:** This template does NOT include migrations or models. It integrates with your existing CMS database structure.

### 2. Add Placeholder Images

Create placeholder images in `public/images/`:
- hero.jpg
- logo.png
- favicon.ico
- gallery-1.jpg to gallery-6.jpg
- testimonial-1.jpg to testimonial-3.jpg
- news-1.jpg to news-3.jpg

You can use stock photos or generate placeholders using services like:
- https://placeholder.com/
- https://picsum.photos/
- https://placehold.co/

### 3. Add Font Awesome (Optional)

Add Font Awesome CDN to `main.blade.php` for icons:

```html
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
```

Or install locally via npm:

```bash
npm install @fortawesome/fontawesome-free
```

### 4. Test the Template

Start your Laravel development server:

```bash
php artisan serve
```

Visit: http://localhost:8000

### 5. Customize and Integrate

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
Manage via your CMS dashboard using the existing `menus` table with `location = 'primary'`

## CMS Integration Notes

### Menu Table Requirements

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

1. Create a new view in `resources/views/pages/`
2. Add a route in `routes/web.php`
3. Add a method in `TemplatePageController.php`

Example:

```php
// Controller method
public function newPage(): View
{
    return view('pages.new-page');
}

// Route
Route::get('/new-page', [TemplatePageController::class, 'newPage'])->name('new-page');
```

#### Customize Styles

Edit `public/css/style.css` to modify:
- Color variables in `:root`
- Section spacing
- Typography
- Component styles

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Notes

- This template uses vanilla CSS (no Tailwind)
- Font Awesome icons are referenced but need to be included
- Images are placeholder references - replace with actual images
- Mobile navigation is fully functional with JavaScript
- All sections are modular and can be easily customized

## Credits

Design inspired by: https://smam1ta.sch.id/
Created for: SMA Muhammadiyah 1 Taman

## License

This template is provided for use with the CMS dashboard system.
