let mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

//Copy fonts folder and images
// mix.copy(['node_modules/mdi/fonts',
// 'node_modules/simple-line-icons/fonts',
// 'resources/assets/fonts/*.*'
// ], 'public/fonts');
// mix.copy('resources/assets/assets/images', 'public/assets/images');

// Copy jQuery and bootstrap
// mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
// mix.copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js');

// Mix custom application
// mix.js('resources/assets/js/main.js', 'public/js/app.js');
// mix.js('resources/assets/js/vendor.js', 'public/js/vendor.js');

// Mix combine assets
// mix.combine(['resources/assets/js/jquery.slimscroll.js',
//     'resources/assets/js/waves.js', 
//     'resources/assets/js/sidebarmenu.js',
//     'resources/assets/js/sticky-kit.min.js',
//     'resources/assets/js/jQuery.style.switcher.js'
// ], 'public/js/assets.js');

// Mix combine custom js
// mix.combine(['resources/assets/js/custom.js'], 'public/js/custom.js');



//Mix scss files
// mix.sass('node_modules/bootstrap/scss/bootstrap.scss', 'public/css');
// mix.sass('resources/assets/main/scss/style.scss', 'public/main/css');
// mix.sass('resources/assets/landingpage/scss/style.scss', 'public/landingpage/css/style.css');

// mix.sass('resources/assets/main/scss/colors/purple-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/blue-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/blue.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/default-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/default.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/green-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/green.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/megna-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/megna.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/purple.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/red-dark.scss', 'public/main/css/colors');
// mix.sass('resources/assets/main/scss/colors/red.scss', 'public/main/css/colors');
mix.sass('resources/assets/main/scss/tailwind.scss', 'public/main/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js'),
        ]
    });


// Full API
// mix.js(src, output);
// mix.react(src, output); <-- Identical to mix.js(), but registers React Babel compilation.
// mix.preact(src, output); <-- Identical to mix.js(), but registers Preact compilation.
// mix.coffee(src, output); <-- Identical to mix.js(), but registers CoffeeScript compilation.
// mix.ts(src, output); <-- TypeScript support. Requires tsconfig.json to exist in the same folder as webpack.mix.js
// mix.extract(vendorLibs);
// mix.sass(src, output);
// mix.standaloneSass('src', output); <-- Faster, but isolated from Webpack.
// mix.fastSass('src', output); <-- Alias for mix.standaloneSass().
// mix.less(src, output);
// mix.stylus(src, output);
// mix.postCss(src, output, [require('postcss-some-plugin')()]);
// mix.browserSync('my-site.test');
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
// mix.babelConfig({}); <-- Merge extra Babel configuration (plugins, etc.) with Mix's default.
// mix.then(function () {}) <-- Will be triggered each time Webpack finishes building.
// mix.extend(name, handler) <-- Extend Mix's API with your own components.
// mix.options({
//   extractVueStyles: false, // Extract .vue component styling to file, rather than inline.
//   globalVueStyles: file, // Variables file to be imported in every component.
//   processCssUrls: true, // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
//   purifyCss: false, // Remove unused CSS selectors.
//   uglify: {}, // Uglify-specific options. https://webpack.github.io/docs/list-of-plugins.html#uglifyjsplugin
//   postCss: [] // Post-CSS options: https://github.com/postcss/postcss/blob/master/docs/plugins.md
// });