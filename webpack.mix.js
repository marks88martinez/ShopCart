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

mix.js([
        'resources/js/app.js',

    ], 'public/js/javascript.js')
    .sass('resources/sass/app.scss', 'public/css/sass.css')
    .styles([
        'resources/css/styles.css',
        'resources/css/producto.css',
        'resources/css/header.css',
        'resources/css/footer.css',
    ],'public/css/estilos.css')
    .copy('resources/images','public/images');
    /** .vue({version: 2,extractVueStyles: true}) */
