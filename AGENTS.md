# Portofolio — Panduan Agent

## Gambaran

Portofolio statis (Laravel 12 + Tailwind v4 + Vite, deploy Vercel serverless). Tidak ada auth, database produksi, API, atau konten dinamis.

## Perintah

| Perintah | Fungsi |
|---|---|
| `npm run dev` | Vite hot-reload |
| `composer dev` | Laravel serve + logs + Vite (via concurrently) |
| `npm run build` | Build assets produksi |
| `composer test` | `artisan config:clear && artisan test` |
| `vendor/bin/phpunit` | Langsung tanpa clear config |
| `vendor/bin/pint` | Format PHP |

## Arsitektur

- **Routes**: Semua `Route::view()` — tanpa Controller. File: `routes/web.php`
- **View**: Komponen Blade di `resources/views/components/`, layout di `layouts/app.blade.php`. Route langsung ke komponen (`Route::view('/about', 'components.about')`)
- **Tema**: CSS custom properties di `resources/css/app.css` di blok `@theme`
- **JS**: `resources/js/app.js` — AOS, theme toggle, mobile nav, navbar scroll, counter, skill bar, parallax, magnetic button, text reveal
- **Build**: Vite via `@tailwindcss/vite` — tanpa PostCSS config (Tailwind v4)
- **Asset publik**: `public/build/` (generated), `public/assets/` (manual)

## Deploy Vercel

Entrypoint: `api/index.php` — redirect storage ke `/tmp` (read-only workaround).
Env wajib di Vercel:
```
SESSION_DRIVER=cookie
CACHE_STORE=array
QUEUE_CONNECTION=sync
APP_ENV=production
APP_DEBUG=false
```

## Gaya Kode

- Blade: snake_case untuk komponen (`x-navbar`, `x-footer`)
- Warna: CSS variables `--color-primary`, `--color-accent`, dll — jangan hardcode hex di Blade
- Dark mode: class `dark` di `<html>`, toggle via localStorage + inline `<script>` di layout
