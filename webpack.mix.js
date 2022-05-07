const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .sass('resources/sass/app.scss', 'public/css')
    // Guest
    .sass('resources/sass/guest/index.scss', 'public/css/guest')
    .sass('resources/sass/guest/login.scss', 'public/css/guest')
    .sass('resources/sass/guest/register.scss', 'public/css/guest')
    // Customer
    // .sass('resources/sass/customer/dashboard.scss', 'public/css/customer')
    // .sass('resources/sass/customer/profile.scss', 'public/css/customer')
    // .sass('resources/sass/customer/teams.scss', 'public/css/customer')
    // .sass('resources/sass/customer/deposite.scss', 'public/css/customer')
    // .sass('resources/sass/customer/withdraw.scss', 'public/css/customer')
    .alias({
        '@': 'resources/js',
        '@x': 'resources/js/Components',
        '@layouts': 'resources/js/Layouts',
    })
    .disableNotifications()
    .browserSync('127.0.0.1:8000');

if (mix.inProduction()) {
    mix.version();
}
