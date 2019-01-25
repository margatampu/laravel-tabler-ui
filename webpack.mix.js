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

mix.webpackConfig({
    resolve: {
        alias: {
            "circle-progress": "jquery-circle-progress",
            core: path.resolve(
                __dirname,
                "node_modules/tabler-ui/dist/assets/js/core.js"
            )
            // "vector-map": "jvectormap"
        }
    }
});

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

mix.autoload({
    jquery: ["$", "jQuery", "jquery", "window.jQuery"]
});

mix.extract(
    [
        "core",
        // "jquery-mask-plugin",
        // 'bootstrap-datepicker',
        // "bootstrap-sass",
        // 'chart.js',
        "jquery-circle-progress",
        // 'jvectormap',
        // 'moment',
        // "requirejs/require",
        // 'select2',
        "selectize",
        "sparkline"
        // 'tablesorter'
    ],
    "public/js/vendor.js"
);

mix.version();

mix.setPublicPath("public");
