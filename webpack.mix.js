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

mix.sass('resources/sass/Shared/footer.scss', 'public/css/Shared')
    .sass('resources/sass/Shared/navbar.scss', 'public/css/Shared')
    .sass('resources/sass/Shared/shared.scss', 'public/css/Shared')
    .sass('resources/sass/User/about.scss', 'public/css/User')
    .sass('resources/sass/User/committees.scss', 'public/css/User')
    .sass('resources/sass/User/contact.scss', 'public/css/User')
    .sass('resources/sass/User/events.scss', 'public/css/User')
    .sass('resources/sass/User/home_page.scss', 'public/css/User')
    .sass('resources/sass/User/profile.scss', 'public/css/User')
    .sass('resources/sass/User/sign.scss', 'public/css/User')
    .js('resources/js/Shared/navbar.js', 'public/js/Shared');
