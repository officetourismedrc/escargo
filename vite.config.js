import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
///public-html/base
export default defineConfig({
    base : './',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/script.js',
                    'resources/js/articles.js',
                ],
                    
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});