import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/buzon.js',
                'resources/js/welcome.js', 
                'resources/js/dashboard.js'  // Eliminar coma extra aquí
            ],
            refresh: true,
        }),
    ],
});

