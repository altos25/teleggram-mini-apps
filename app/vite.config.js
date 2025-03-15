import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // Набор для Tailwind
                'resources/css/app.css',
                'resources/js/app.js',
                // Набор для Bootstrap
                'resources/css/bootstrap.css',
                'resources/js/bootstrap.js',
                // Набор для demo
                'resources/css/demo.css',
                'resources/js/demo.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true, // Нужно для корректного подключения ассетов после сборки
    },
});
