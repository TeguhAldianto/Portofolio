# Teguh Aldianto - Professional Portfolio

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Vue.js](https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vue.js&logoColor=4FC08D)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

Welcome to the source code of my professional portfolio website. This project is built using modern web technologies to ensure a fast, responsive, and aesthetically pleasing user experience. 

It serves as a showcase of my skills in Full-Stack Web and Mobile Development, particularly focusing on Clean Architecture and scalable solutions.

## 🚀 Live Preview
**[Deploy Status]** Ready for Vercel Serverless Deployment.

## 🛠️ Tech Stack
- **Framework**: Laravel 11/12
- **Styling**: Tailwind CSS v4 (Midnight Lavender Custom Theme)
- **Frontend Build Tool**: Vite
- **Deployment Strategy**: Vercel Serverless (via `vercel-php`)

## 💡 Key Features
- **Serverless Ready**: Fully configured to run in a stateless/serverless environment like Vercel without relying on traditional filesystem sessions or local databases.
- **Dynamic Theming**: Custom Midnight Lavender aesthetic with tailored text-selection colors and UI components.
- **SEO Optimized**: Fully equipped with Open Graph (OG) Meta tags for proper social media link unfurling.

## 💻 Local Development Setup

If you wish to run this project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone https://github.com/TeguhAldianto/Portofolio.git
   cd Portofolio
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install NPM Dependencies:**
   ```bash
   npm install
   ```

4. **Environment Setup:**
   Copy `.env.example` to `.env` and generate an application key.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Build Assets & Run:**
   Build the Tailwind CSS assets and start the local development server.
   ```bash
   npm run build
   php artisan serve
   ```
   *Visit `http://localhost:8000` in your browser.*

## 📦 Vercel Deployment

This project contains specific configurations (`api/index.php` and `vercel.json`) to bypass Vercel's read-only filesystem restrictions by mapping Laravel's storage directories to `/tmp`.

**Environment Variables required on Vercel:**
- `APP_ENV="production"`
- `APP_DEBUG="false"`
- `SESSION_DRIVER="cookie"`
- `CACHE_STORE="array"`
- `QUEUE_CONNECTION="sync"`

## 👨‍💻 Author
**Teguh Aldianto**
Software Engineer | Clean Architecture Enthusiast

---
*Built with ❤️ and Laravel.*
