const mix = require('laravel-mix');

mix
.options({
  extractVueStyles: false,
  processCssUrls: true,
  terser: {},
  purifyCss: false,
  postCss: [require('autoprefixer')],
  clearConsole: false,
  cssNano: {}
});

mix
.setPublicPath('public')
.js('resources/js/main.js', 'public/js/bundle.js')
.js('node_modules/vue/dist/vue.js', 'public/js/bundle.js')
.sass('resources/scss/main.scss', 'public/css/bundle.css')
.minify('public/css/bundle.css')
.minify('public/js/bundle.js')
.browserSync({
  proxy: 'boilerplate.ddev.site',
  port: 32784,
  files: [
    'public/css/{*,**/*}.css',
    'public/js/{*,**/*}.js',
    'public/index.php',
    'public/views/{*,**/*}.php'
  ]
});

if (mix.inProduction()) {
  mix.version(); // TODO Add mix() functionality
}
else {
  mix.sourceMaps();
}