const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js");

mix.sass("resources/sass/app.scss", "public/css");

mix.scripts(
    [
        "resources/js/tabler.js",
        "resources/js/d3.v3.min.js",
        "resources/js/c3.min.js"
    ],
    "public/js/c3.js"
);

mix.extract(
    [
        "lodash",
        "popper.js",
        //   "bootstrap",
        // 'bootstrap-datepicker',
        "bootstrap-sass",
        // 'chart.js',
        // 'd3',
        "jquery",
        // 'jquery-circle-progress',
        // 'jvectormap',
        // 'moment',
        // 'requirejs/require',
        // 'select2',
        "selectize",
        // 'sparkline',
        // 'tablesorter',
        "vue"
    ],
    "public/js/vendor.js"
);

mix.version();

mix.setPublicPath("public");
