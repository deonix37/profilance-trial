const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/shortLinks/create.js', 'public/js/shortLinks')
    .css('resources/css/app.css', 'public/css')
    .css('resources/css/shortLinks/create.css', 'public/css/shortLinks');
