---
name: add-section
description: Add a new portfolio section with Blade component, route, and navbar links
license: MIT
compatibility: opencode
metadata:
  framework: laravel
  type: feature
---

## What I do

Add a new portfolio section (e.g. "testimonials", "blog") to this Laravel static portfolio. Three files to touch:

### 1. Blade component
Create `resources/views/components/<section>.blade.php` — named slug.

Wrap content with a `<section id="<section>" class="py-16 md:py-24">` container. Use CSS variables (`var(--color-primary)`) not hex colors. Follow conventions from existing components like `projects.blade.php` or `experience.blade.php`.

### 2. Route
In `routes/web.php`, add `Route::view('/<section>', 'components.<section>');` right before the `/contact` route, keeping alphabetical order.

### 3. Navbar
Edit `resources/views/components/navbar.blade.php` — insert a new `<a>` in **both** desktop nav (`line ~16-21`) and mobile nav (`line ~39-46`), maintaining alphabetical order. Use the same active-link pattern:
```blade
<a href="/<section>" class="{{ $current === '<section>' ? 'text-primary font-semibold' : 'text-zinc-500 dark:text-zinc-400 hover:text-primary dark:hover:text-primary' }} transition-colors">
```

Mobile links use the `p-2 font-medium rounded-lg` variant with `bg-primary/10` for active.

### Order
Always insert routes and navbar links in **alphabetical** order (after "about", before "contact"). Keep section order consistent across all three files.

### Validation
- `php artisan route:list` to verify route
- Check navbar renders without syntax errors
