import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
            transformOnServe: (code) => code.replaceAll('/images', 'http://localhost:8000/images'),
        }),
        tailwindcss(),
    ],
});
