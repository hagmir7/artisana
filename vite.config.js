import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import viteCompression from 'vite-plugin-compression2';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                // 'resources/css/filament/admin/theme.css',
            ],
            refresh: true,
        }),

        viteCompression(),
    ],
    assetsInclude: ['**/*.ttf'],

});
