const { mix } = require('laravel-mix')

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

mix.js('resources/assets/js/app.js', 'public/js')
mix.sass('resources/assets/sass/app.scss', 'public/css')
mix.extract(['vue'])
mix.version()

mix.options({
  purifyCss: true,
  processCssUrls: false,
})

mix.webpackConfig({
  resolve: {
    alias: {
      "vue$": "vue/dist/vue.runtime.esm.js"
    }
  }
})
