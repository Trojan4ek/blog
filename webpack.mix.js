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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.style([
    'resources/front/css/bootstrap.min.css',
    'resources/front/css/font-awesome.min.css',
    'resources/front/css/templatemo_misc.css',
    'resources/front/css/templatemo_style.css',
], 'public/css/front.css');

mix.scripts([
    'resources/front/js/jquery-1.10.2.min.js',
    'resources/front/js/jquery.lightbox.js',
    'resources/front/js/templatemo_custom.js',
], 'public/js/front.js');

mix.copy('resources/front/fonts', 'public/fonts');
mix.copy('resources/front/images', 'public/images');
