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

mix.js('resources/js/catalog.js', 'public/js').vue()
mix.js('resources/js/cartIcon.js', 'public/js').vue()
mix.js('resources/js/cheque.js', 'public/js').vue()
mix.js('resources/js/orderRegistration.js', 'public/js').vue()
mix.js('resources/js/cart.js', 'public/js').vue()
mix.js('resources/js/show.js', 'public/js').vue()
mix.js('resources/js/adminPanel.js', 'public/js').vue()
    // .sass('resources/sass/app.scss', 'public/css');
