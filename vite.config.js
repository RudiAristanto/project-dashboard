import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/css/awesome.css', 'resources/css/filament/admin/themes/Awesome.cs'],
            refresh: true,
        }),
    ],
});
