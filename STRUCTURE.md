# Template Structure - Complete File Tree

```
template/
│
├── app/
│   └── Http/
│       └── Controllers/
│           └── TemplatePageController.php (optional)
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
│       └── home.blade.php
│
├── routes/
│   └── web.php (optional)
│
├── README.md
├── INSTALLATION.md
└── STRUCTURE.md
```

## File Descriptions

### Controllers
- **TemplatePageController.php** (optional) - Handles all page routing and view rendering
  - May be removed if CMS has its own routing system

### Views
- **layouts/main.blade.php** - Master layout with navbar, footer, and content sections
- **partials/navbar.blade.php** - Database-driven navigation component using `DB::table('menus')`
- **home.blade.php** - Homepage with all sections (hero, core values, gallery, testimonials, news)

### Assets
- **public/css/style.css** - Complete stylesheet with CSS variables, responsive design
- **public/js/main.js** - JavaScript for mobile menu, smooth scroll, animations
- **public/images/** - Directory for image assets (currently empty, placeholder guide provided)

### Routes
- **web.php** (optional) - Defines all web routes for the template
  - May be removed if CMS handles routing

### Documentation
- **README.md** - Complete template documentation
- **INSTALLATION.md** - Installation and setup guide
- **STRUCTURE.md** - This file

## Component Breakdown

### Main Layout (main.blade.php)
- HTML5 structure
- Meta tags (charset, viewport, IE compatibility)
- Dynamic page title with @yield
- CSS/JS asset loading
- Navbar include
- Main content section with @yield
- Comprehensive footer (about, links, services, contact)
- Stack sections for page-specific CSS/JS

### Navigation (navbar.blade.php)
- Responsive design with mobile toggle
- **Database-driven menu using `DB::table('menus')`**
- Queries: `location = 'primary'` and `is_active = 1`
- Active state detection
- Fallback static menu
- Logo and brand text

### Homepage (home.blade.php)
1. Hero Section - Banner with CTA buttons
2. Core Values - 4-card grid
3. Gallery - 6-item responsive grid
4. Testimonials - 3-card carousel
5. News - 3-article grid with metadata
6. CTA Section - Registration call-to-action

### Styling Features
- CSS custom properties (variables)
- Responsive grid layouts
- Hover effects and transitions
- Mobile-first approach
- Utility classes
- Color scheme: Blue (#003b73), Gold (#FFD700)

### JavaScript Features
- Mobile menu toggle
- Smooth scrolling
- Scroll-based navbar shadow
- Form validation
- Lazy loading
- Scroll animations
- Notification system

## CMS Integration Notes

This template is designed to integrate seamlessly with existing Laravel CMS systems:

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
