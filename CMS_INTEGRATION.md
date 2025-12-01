# CMS Integration Guide

## Template Structure for CMS Import

This Laravel web template is designed to be imported into a CMS dashboard system. Follow this guide for proper integration.

---

## Required Folder Structure

```
template.zip
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── main.blade.php     ← Main layout
│       ├── home.blade.php          ← Homepage
│       ├── tentang.blade.php       ← About page
│       ├── program.blade.php       ← Programs page
│       ├── berita.blade.php        ← News listing page
│       ├── galeri.blade.php        ← Gallery page
│       ├── kontak.blade.php        ← Contact page
│       └── ppdb.blade.php          ← Admission page
├── app/Http/Controllers/
│   └── Template/
│       └── SchoolController.php    ← Optional controller
├── routes/
│   └── web.php                     ← Optional routes
└── public/
    ├── css/
    │   └── style.css
    ├── js/
    │   └── main.js
    └── images/
```

---

## CMS Database Integration Points

### 1. Dynamic Navigation (Navbar)

**File:** `resources/views/partials/navbar.blade.php`

**Database Query:**
```php
$menus = DB::table('menus')
    ->where('location', 'primary')
    ->where('is_active', 1)
    ->orderBy('sort_order', 'asc')
    ->get();
```

**Required Table:** `menus`
| Column | Type | Description |
|--------|------|-------------|
| name | string | Menu display name |
| slug | string | URL slug |
| location | string | Menu location ('primary') |
| sort_order | integer | Display order |
| is_active | boolean | Active status |

---

### 2. News Management

**File:** `resources/views/berita.blade.php`

**Integration Point:**
```php
// Replace static array with CMS database query:
$newsList = DB::table('posts')
    ->where('status', 'published')
    ->orderBy('created_at', 'desc')
    ->paginate(9);
```

**Required Table:** `posts` or `news`
| Column | Type | Description |
|--------|------|-------------|
| title | string | News title |
| slug | string | URL slug |
| category | string | News category |
| excerpt | text | Short description |
| content | text | Full content |
| image | string | Featured image path |
| author | string | Author name |
| created_at | timestamp | Publication date |
| status | string | publish/draft |

---

### 3. Gallery Management

**File:** `resources/views/galeri.blade.php`

**Integration Point:**
```php
// Replace static array with CMS database query:
$galleryItems = DB::table('gallery')
    ->where('is_active', 1)
    ->orderBy('created_at', 'desc')
    ->get();
```

**Required Table:** `gallery`
| Column | Type | Description |
|--------|------|-------------|
| title | string | Image title |
| image | string | Image path |
| album | string | Album/category |
| is_active | boolean | Active status |

---

### 4. Contact Form Submission

**File:** `app/Http/Controllers/Template/SchoolController.php`

**Method:** `kontakSubmit()`

**Integration Point:**
```php
// Store contact messages in database:
DB::table('contact_messages')->insert([
    'name' => $validated['name'],
    'email' => $validated['email'],
    'phone' => $validated['phone'],
    'subject' => $validated['subject'],
    'message' => $validated['message'],
    'created_at' => now(),
]);
```

**Required Table:** `contact_messages`
| Column | Type | Description |
|--------|------|-------------|
| name | string | Sender name |
| email | string | Sender email |
| phone | string | Phone number |
| subject | string | Message subject |
| message | text | Message content |
| status | string | read/unread |
| created_at | timestamp | Submission date |

---

## CMS Import Steps

### Step 1: Extract Template
```bash
unzip template.zip -d /path/to/cms/storage/templates/school-template/
```

### Step 2: Copy Views
```bash
cp -r storage/templates/school-template/resources/views/* resources/views/
```

### Step 3: Copy Assets
```bash
cp -r storage/templates/school-template/public/* public/
```

### Step 4: Register Routes (Optional)
If using template routes, include in your main routes file:
```php
// routes/web.php
require __DIR__.'/template-routes/school.php';
```

### Step 5: Configure Database Tables
Ensure your CMS has the required tables:
- `menus` (for navigation)
- `posts` or `news` (for news content)
- `gallery` (for gallery images)
- `contact_messages` (for contact form)

---

## Customization by CMS

### Dynamic Content Replacement

The CMS should replace static placeholder content with database queries:

**Before (Static):**
```php
@php
    $newsList = [
        ['title' => 'Static News', ...],
    ];
@endphp
```

**After (Dynamic):**
```php
@php
    $newsList = DB::table('posts')
        ->where('status', 'published')
        ->latest()
        ->get();
@endphp
```

### Asset Management

All images referenced in views use `{{ asset() }}` helper:
```php
<img src="{{ asset('images/news-1.jpg') }}" alt="News">
```

CMS should replace with dynamic paths:
```php
<img src="{{ asset('storage/uploads/' . $news->image) }}" alt="{{ $news->title }}">
```

---

## Template Variables

The CMS can inject these variables into views:

### Site Settings
```php
@php
    $siteName = setting('site_name', 'SMA Negeri 1 Contoh');
    $sitePhone = setting('site_phone', '+62 813-1945-7080');
    $siteEmail = setting('site_email', 'info@sman1contoh.sch.id');
@endphp
```

### SEO Meta Tags
```php
<title>{{ $pageTitle ?? setting('site_name') }}</title>
<meta name="description" content="{{ $metaDescription ?? setting('site_description') }}">
```

---

## Features Included

✅ Responsive design (mobile, tablet, desktop)
✅ Database-driven navigation
✅ News listing with category filter
✅ Gallery with lightbox
✅ Contact form with validation
✅ PPDB (Admission) information page
✅ About us with timeline
✅ Programs showcase
✅ Clean, modern UI
✅ FontAwesome icons support
✅ Smooth animations & transitions

---

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

---

## Template Configuration

### Colors
Edit `public/css/style.css`:
```css
:root {
    --primary-color: #003b73;
    --secondary-color: #0074D9;
    --accent-color: #FFD700;
}
```

### Logo & Branding
Replace in CMS settings or directly:
- `public/images/logo.png`
- Update school name in views

---

## Support

For template customization or integration issues, refer to:
- `README.md` - Complete documentation
- `INSTALLATION.md` - Installation guide
- `STRUCTURE.md` - File structure details

---

**Template Version:** 3.0 (CMS-Ready)
**Last Updated:** December 1, 2025
