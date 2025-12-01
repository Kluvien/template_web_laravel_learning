# Template Structure - Complete File Tree

```
template/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── Template/
│               └── SchoolController.php
│
├── public/
│   ├── css/
│   │   └── style.css
│   │
│   ├── js/
│   │   └── main.js
│   │
│   └── images/
│       └── README.md (placeholder guide)
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── main.blade.php
│       │
│       ├── partials/
│       │   └── navbar.blade.php
│       │
│       ├── home.blade.php
│       ├── tentang.blade.php
│       ├── program.blade.php
│       ├── berita.blade.php
│       ├── galeri.blade.php
│       ├── kontak.blade.php
│       └── ppdb.blade.php
│
├── routes/
│   └── web.php
│
├── README.md
├── INSTALLATION.md
├── STRUCTURE.md
└── CMS_INTEGRATION.md
```

## File Descriptions

### Controllers
- **Template/SchoolController.php** - Main controller handling all page routes
  - `home()` - Homepage
  - `tentang()` - About page
  - `program()` - Programs page
  - `berita()` - News listing
  - `beritaDetail($slug)` - Individual news article
  - `galeri()` - Photo gallery
  - `kontak()` - Contact page (GET)
  - `kontakSubmit()` - Contact form submission (POST)
  - `ppdb()` - Admission page

### Views

#### Layouts
- **layouts/main.blade.php** - Master layout with navbar, footer, and content sections
  - Includes Font Awesome CDN
  - CSS/JS asset loading
  - @yield('content') for page content
  - @stack('styles') and @stack('scripts') for page-specific assets

#### Partials
- **partials/navbar.blade.php** - Database-driven navigation component
  - Uses `DB::table('menus')` for dynamic menu
  - Queries for `location = 'primary'` and `is_active = 1`
  - Fallback static menu included
  - Mobile-responsive hamburger menu

#### Pages
- **home.blade.php** - Homepage with 6 major sections
  - Hero banner, core values, gallery, testimonials, news, CTA
  
- **tentang.blade.php** - About page
  - School profile section
  - Vision & Mission cards
  - History timeline (4 milestones)
  
- **program.blade.php** - Programs showcase
  - Academic programs
  - Character building programs
  - Extracurricular activities
  - Programs CTA section
  
- **berita.blade.php** - News listing
  - Category filtering (all, prestasi, kegiatan, pengumuman, akademik)
  - News grid with pagination
  - Static sample data (to be replaced with CMS data)
  
- **galeri.blade.php** - Photo gallery
  - Gallery grid layout
  - Lightbox modal for image zoom
  - Album/category filtering
  - Keyboard navigation support
  
- **kontak.blade.php** - Contact page
  - Contact information cards
  - Contact form with CSRF protection
  - Google Maps integration
  - Form validation (client & server-side)
  
- **ppdb.blade.php** - Student admission page
  - 6-step registration timeline
  - Requirements grid
  - FAQ accordion (12 questions)
  - Registration CTA

### Assets
- **public/css/style.css** - Complete stylesheet (~2000+ lines)
  - CSS custom properties (variables)
  - Responsive design (mobile-first)
  - Component styles (cards, buttons, forms, etc.)
  - Page-specific styles for all 7 pages
  - Animation and transition effects
  
- **public/js/main.js** - JavaScript functionality
  - Mobile menu toggle
  - Smooth scrolling
  - Gallery lightbox
  - News category filters
  - FAQ accordion
  - Form validation helpers
  
- **public/images/** - Directory for image assets (currently empty, placeholder guide provided)

### Routes
- **web.php** - All web route definitions
  ```php
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

### Documentation
- **README.md** - Complete template documentation with features and usage
- **INSTALLATION.md** - Installation and setup guide
- **STRUCTURE.md** - This file (file structure and component descriptions)
- **CMS_INTEGRATION.md** - Detailed CMS integration guide

## Component Breakdown

### Main Layout (main.blade.php)
- HTML5 structure
- Meta tags (charset, viewport, IE compatibility)
- Dynamic page title with @yield('title', 'SMA Negeri 1 Contoh')
- Font Awesome 6.4.0 CDN
- CSS/JS asset loading with asset() helper
- Navbar include (@include('partials.navbar'))
- Main content section with @yield('content')
- Comprehensive footer (about, links, services, contact)
- Stack sections for page-specific CSS/JS (@stack('styles'), @stack('scripts'))
- Stack sections for page-specific CSS/JS

### Navigation (navbar.blade.php)
- Responsive design with mobile toggle
- **Database-driven menu using `DB::table('menus')`**
- Queries: `location = 'primary'` and `is_active = 1`
- Active state detection using request()->is()
- Fallback static menu if database is empty
- Logo and brand text
- Mobile hamburger menu (JavaScript-powered)

### Page Structures

#### Homepage (home.blade.php)
1. Hero Section - Banner with dual CTA buttons
2. Core Values - 4-card grid (Excellence, Integrity, Respect, Innovation)
3. Gallery - 6-item responsive grid with hover effects
4. Testimonials - 3 testimonials (students and parents)
5. News - Latest news grid with category tags and metadata
6. CTA Section - PPDB registration call-to-action

#### About Page (tentang.blade.php)
1. Page Header - Title and breadcrumb
2. School Profile - About grid with description and statistics
3. Vision & Mission - Card layout with icons
4. History Timeline - 4 milestones with year markers

#### Programs Page (program.blade.php)
1. Page Header
2. Academic Programs - 3 program cards (IPA, IPS, Language)
3. Character Building - 3 programs (Religious, Nationalism, Leadership)
4. Extracurricular - 6 activities grid
5. CTA Section

#### News Page (berita.blade.php)
1. Page Header
2. Category Filters - 5 buttons (all, prestasi, kegiatan, pengumuman, akademik)
3. News Grid - 9 articles per page with pagination
4. Each article: image, category, date, author, title, excerpt

#### Gallery Page (galeri.blade.php)
1. Page Header
2. Album Filters - 4 categories (all, kegiatan, prestasi, fasilitas)
3. Gallery Grid - Masonry-style layout
4. Lightbox Modal - Full-screen image viewer with navigation

#### Contact Page (kontak.blade.php)
1. Page Header
2. Contact Info - 4 cards (address, phone, email, social media)
3. Contact Form - Name, email, phone, subject, message (with CSRF)
4. Google Maps Embed

#### Admission Page (ppdb.blade.php)
1. Page Header
2. Registration Timeline - 6 steps with dates
3. Requirements - Grid layout with categories
4. FAQ Accordion - 12 expandable questions
5. Registration CTA

### Styling Features
- CSS custom properties (variables) in :root
- Responsive grid layouts (CSS Grid & Flexbox)
- Hover effects and smooth transitions
- Mobile-first approach with breakpoints:
  - Desktop: default
  - Tablet: max-width 768px
  - Mobile: max-width 480px
- Utility classes for spacing, colors, buttons
- Color scheme: 
  - Primary: #003b73 (Dark Blue)
  - Secondary: #0074D9 (Blue)
  - Accent: #FFD700 (Gold)
- Typography: System font stack
- Component styles: cards, buttons, forms, modals, accordions

### JavaScript Features
- Mobile menu toggle
- Smooth scrolling to anchors
- Gallery lightbox (open, close, next, previous, keyboard navigation)
- News category filtering
- FAQ accordion toggle
- Form validation helpers
- Scroll-based effects
- Event delegation for dynamic content

## CMS Integration Notes

This template is designed to integrate seamlessly with existing Laravel CMS systems:

### Required Database Tables

**menus** (for navigation):
- Columns: name, slug, location, sort_order, is_active
- Location value: 'primary' for main navbar

**posts/news** (optional - for dynamic news):
- Columns: title, slug, category, excerpt, content, image, author, created_at, status

**gallery** (optional - for dynamic gallery):
- Columns: title, image, album, is_active

**contact_messages** (optional - for contact form storage):
- Columns: name, email, phone, subject, message, status, created_at

### Integration Points

1. **Navbar**: Already integrated with `DB::table('menus')` in `partials/navbar.blade.php`
2. **News**: Replace static array in `berita.blade.php` with database query
3. **Gallery**: Replace static array in `galeri.blade.php` with database query
4. **Contact Form**: Already submits to `kontakSubmit()` method - add database storage logic

### Controller Namespace

The controller is located at: `App\Http\Controllers\Template\SchoolController`

This follows the CMS requirement for subdirectory organization: `[Name]/SchoolController.php`

### No Migrations/Models Included

To prevent conflicts with existing CMS database structure, this template:
- ✅ Uses `DB::table()` instead of Eloquent models
- ✅ Does NOT include migrations
- ✅ Does NOT include seeders
- ✅ Works with existing CMS tables

### Asset References

All assets use Laravel's `asset()` helper:
```php
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="{{ asset('js/main.js') }}"></script>
<img src="{{ asset('images/hero.jpg') }}" alt="Hero">
```

Replace image paths with dynamic CMS uploads:
```php
<img src="{{ asset('storage/uploads/' . $item->image) }}" alt="{{ $item->title }}">
```

## File Size Overview

| File | Lines | Size |
|------|-------|------|
| style.css | ~2000 | Large (comprehensive styling) |
| main.js | ~300 | Medium (interactive features) |
| main.blade.php | ~100 | Small (master layout) |
| home.blade.php | ~300 | Medium (6 sections) |
| tentang.blade.php | ~150 | Medium (3 sections) |
| program.blade.php | ~200 | Medium (3 sections) |
| berita.blade.php | ~180 | Medium (filters + grid) |
| galeri.blade.php | ~200 | Medium (grid + lightbox) |
| kontak.blade.php | ~180 | Medium (form + map) |
| ppdb.blade.php | ~250 | Medium (timeline + FAQ) |
| SchoolController.php | ~80 | Small (route handlers) |
| web.php | ~20 | Small (route definitions) |

---

**Template Version:** 3.0 (CMS-Ready)
**Last Updated:** December 1, 2025


1. **No Database Migrations** - Uses existing CMS `menus` table
2. **No Models** - Uses `DB::table()` for direct database queries
3. **No Seeders** - CMS manages menu data
4. **Modular** - Components are separated for easy maintenance
5. **Extensible** - Easy to add new pages and sections
6. **SEO-friendly** - Semantic HTML, meta tags
7. **Accessible** - ARIA labels, alt texts, keyboard navigation
8. **Performance** - Optimized CSS, lazy loading, minimal dependencies

## Expected CMS Database Schema

### Menus Table

Your CMS should have a `menus` table with these columns:

| Column      | Type    | Description                      |
|-------------|---------|----------------------------------|
| name        | string  | Display name                     |
| slug        | string  | URL slug                         |
| location    | string  | Menu location ('primary', etc.)  |
| sort_order  | integer | Display order                    |
| is_active   | boolean | Active status (1 = active)       |

### Database Query Used

```php
DB::table('menus')
    ->where('location', 'primary')
    ->where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();
```

If your CMS uses different column names, edit `resources/views/partials/navbar.blade.php` accordingly.

## Total Files: 10

- PHP Files: 2 (1 controller, 1 route file - both optional)
- Blade Templates: 3
- CSS Files: 1
- JavaScript Files: 1
- Markdown Documentation: 4

**Note:** This template does NOT include:
- Database migrations
- Eloquent models
- Database seeders

These are intentionally excluded to prevent conflicts with your existing CMS structure.
