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

var bootstrapPath = 'node_modules/bootstrap-sass/assets';
mix.js('resources/assets/js/app.js', 'public/js')
    .sourceMaps()
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy(bootstrapPath + '/fonts/bootstrap', 'public/fonts')
    .browserSync({
      proxy: 'http://localhost'
    })
    .disableNotifications();
