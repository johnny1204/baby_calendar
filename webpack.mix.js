const mix = require('laravel-mix');
const glob = require('glob');
require('mix-tailwindcss');
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

glob.sync('resources/js/**/*.js').map(file => {
   const dir     = file.slice(file.indexOf('/js') + 1);
   const jsPath  = dir.split("/").reverse().slice(1).reverse().join("/");
   mix.js(file, `public/${jsPath}`);
})

mix.sass('resources/sass/app.scss', 'public/css')
   .tailwind();
