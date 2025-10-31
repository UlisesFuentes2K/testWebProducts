import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: 'localhost',
        port: 5173,
        cors: {
            origin: 'http://testwebproducts.test',
        },
        hmr: {
            overlay: false,
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css'],
            refresh: true,
        }),
    ],
});
