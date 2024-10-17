import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/sections/header.scss',
                'resources/css/sections/footer.scss',
                'resources/css/home.scss',
                'resources/sass/main.scss',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
