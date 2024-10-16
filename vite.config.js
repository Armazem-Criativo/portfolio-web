import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/sections/header.css',
                'resources/css/sections/footer.css',
                'resources/css/home.css',
                'resources/sass/main.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
