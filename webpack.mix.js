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
    .sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/input_file.js', 'public/js')
    .js('resources/js/select_form.js', 'public/js')
    .js('resources/js/add_book_to_form.js', 'public/js')
    .js('resources/js/rate.js', 'public/js')
    .js('resources/js/show_edit.js', 'public/js')
