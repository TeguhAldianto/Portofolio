import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ], // <--- Array plugins ditutup di sini

    // Konfigurasi build diletakkan di sini (sejajar dengan plugins)
    build: {
        outDir: 'dist',
    },
});
