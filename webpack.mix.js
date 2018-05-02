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

/* mix js */
mix.scripts([
    'resources/assets/js/front-custom.js'
], 'public/js/front-custom.min.js');

mix.scripts([
    'resources/assets/js/front-cart.js'
], 'public/js/front-cart.min.js');

/* mix css */
mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
mix.sass('resources/assets/sass/front-custom.scss', 'public/css');

/* mix copy */
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
mix.copy('node_modules/popper.js/dist/popper.min.js', 'public/js/popper.min.js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
mix.copy('node_modules/holderjs/holder.min.js', 'public/js/holder.min.js');
mix.copyDirectory('resources/assets/img', 'public/img');
mix.copyDirectory('resources/assets/font-awesome', 'public/font-awesome');