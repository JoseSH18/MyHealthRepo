import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/styles.scss',
                'resources/sass/pacientestyle.scss',
                'resources/sass/optionstyle.scss',
                'resources/sass/homestyle.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
