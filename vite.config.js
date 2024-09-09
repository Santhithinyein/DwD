import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/custom_js/engMya.js',
                'resources/js/engMya.js'
            ],
            refresh: true,
        }),
    ],
});
