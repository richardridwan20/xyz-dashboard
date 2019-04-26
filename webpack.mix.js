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

mix.copyDirectory('resources/js/core', 'public/js/core');

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/codebase.js', 'public/js/codebase.js')
    .styles([
       'resources/css/codebase.css',
       'resources/css/themes/corporate.css'
    ], 'public/css/app.css');

mix.scripts('resources/js/plugins/chartjs/Chart.bundle.min.js', 'public/js/theme.js');

mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copyDirectory('resources/media', 'public/assets/media');
