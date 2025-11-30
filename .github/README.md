# Laravel Blade Template - SMA Muhammadiyah 1 Taman

Clean and modern Laravel Blade front-end template designed for CMS integration.

## Features

- 🎨 Clean, responsive design inspired by smam1ta.sch.id
- 📱 Mobile-first responsive layout
- 🗄️ Database-driven navigation (CMS compatible)
- 🎯 Modular Blade components
- 💾 No CSS framework dependencies (vanilla CSS)
- ⚡ Optimized performance

## Quick Start

```bash
# Clone the repository
git clone https://github.com/Kluvien/template_web_laravel_learning.git

# Copy files to your Laravel CMS
cp -r resources/views/* your-cms/resources/views/
cp -r public/css your-cms/public/
cp -r public/js your-cms/public/
```

See [INSTALLATION.md](INSTALLATION.md) for detailed setup instructions.

## Template Structure

- **Views**: Blade layouts, partials, and pages
- **Assets**: CSS, JavaScript, image placeholders
- **Optional**: Controller and routes (CMS may override)

## CMS Integration

This template integrates with existing Laravel CMS systems:

- Uses `DB::table('menus')` for navigation
- No migrations, models, or seeders included
- Compatible with existing database schemas

## Documentation

- [README.md](README.md) - Complete documentation
- [INSTALLATION.md](INSTALLATION.md) - Setup guide
- [STRUCTURE.md](STRUCTURE.md) - File structure details
- [REVISION_SUMMARY.md](REVISION_SUMMARY.md) - Changelog

## License

Open source template for educational purposes.
