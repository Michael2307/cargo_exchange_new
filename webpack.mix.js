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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
// webpack.mix.js --
//
// const webpack = require("laravel-mix/src/BabelConfig");
// mix.js('src/app.js', './')
// mix.sass('src/app.scss', './',[])
// mix.options({
//     processCssUrls: false
// });

mix.sourceMaps()


// mix.disableSuccessNotifications();

// mix.disableNotifications();
//
// mix.webpackConfig({
//     stats: {
//         warnings: false,
//     }
// });
