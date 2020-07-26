const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copy('resources/assets/', 'public/');
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css').options({
    processCssUrls: false,
}).version();

mix.copy('resources/assets/img', 'public/img')
    .copy('resources/assets/sound', 'public/sound')
    .copy('resources/assets/font', 'public/font');
