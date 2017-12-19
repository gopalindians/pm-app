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
    .styles([
        'resources/assets/css/font-awesome.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/custom_style.css',

        'resources/assets/css/logo-nav.css',
        'resources/assets/css/leadcamp.css',
        'resources/assets/css/style.css'

    ], 'public/css/all.css')
    .sass('resources/assets/sass/app.scss', 'public/css');


if (mix.inProduction()) {
    mix.version();
}
