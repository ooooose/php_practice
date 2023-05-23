const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');//追記



mix.sass('resources/sass/app.scss', 'public/css')
    .options({ 
        processCssUrls: false, //公式ドキュメント参照
        postCss: [ tailwindcss('./tailwind.config.js') ], 
    }); 

if (mix.inProduction()) {
    mix.version();
}