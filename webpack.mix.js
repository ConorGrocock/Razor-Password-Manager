const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js').version();
mix.js('resources/assets/js/sweetalert.js', 'public/js').version();
mix.sass('resources/assets/sass/app.scss', 'public/css/');
mix.combine([ 'resources/assets/css/bootstrap-social.css', 'resources/assets/css/sweetalert.css' ], 'public/css/vendor.css');
