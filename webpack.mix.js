let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

// mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
//     .copy(['node_modules/tether/dist/js/tether.min.js',
//         'node_modules/bootstrap/dist/js/bootstrap.min.js'], 'public/js')
//     .js('resources/assets/js/vendor.js', 'public/js')

// mix.js('resources/assets/js/main.js', 'public/js/app.js');
// mix.combine(['resources/assets/js/jquery.slimscroll.js',
//     'resources/assets/js/waves.js', 
//     'resources/assets/js/sidebarmenu.js',
//     'resources/assets/js/sticky-kit.min.js',
//     'resources/assets/js/jQuery.style.switcher.js',
//     'resources/assets/js/custom.min.js'
// ], 'public/js/custom.js');


//Mix scss files
// mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css');
mix.sass('resources/assets/scss/style.scss', 'public/css');
// mix.sass('resources/assets/scss/style-lp.scss', 'public/css');
// mix.sass('resources/assets/scss/colors/purple-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/blue-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/blue.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/default-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/default.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/green-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/green.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/megna-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/megna.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/purple.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/red-dark.scss', 'public/css/colors');
// mix.sass('resources/assets/scss/colors/red.scss', 'public/css/colors');

// //Copy font folder
// mix.copy(['node_modules/font-awesome/fonts',
    // 'node_modules/mdi/fonts',
    // 'node_modules/simple-line-icons/fonts',
    // 'resources/assets/fonts/*.*'
// ], 'public/fonts')
// .copy('resources/assets/images', 'public/images');

// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.less(src, output);
// mix.stylus(src, output);
// mix.browserSync('my-site.dev');
// mix.combine(files, destination);
// mix.babel(files, destination); <-- Identical to mix.combine(), but also includes Babel compilation.
// mix.copy(from, to);
// mix.copyDirectory(fromDir, toDir);
// mix.minify(file);
// mix.sourceMaps(); // Enable sourcemaps
// mix.version(); // Enable versioning.
// mix.disableNotifications();
// mix.setPublicPath('path/to/public');
// mix.setResourceRoot('prefix/for/resource/locators');
// mix.autoload({}); <-- Will be passed to Webpack's ProvidePlugin.
// mix.webpackConfig({}); <-- Override webpack.config.js, without editing the file directly.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });
