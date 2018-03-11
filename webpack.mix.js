let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.sass('resources/assets/sass/homepage.scss', 'public/css');

mix.sass('resources/assets/sass/profilepage.scss', 'public/css');
mix.js('resources/assets/js/menu.js', 'public/js')

mix.sass('resources/assets/sass/settingspage.scss', 'public/css');

mix.sass('resources/assets/sass/menu.scss', 'public/css');