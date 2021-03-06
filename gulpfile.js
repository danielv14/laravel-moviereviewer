// notification or not
process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

// use livereload
require('laravel-elixir-livereload');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
  mix.sass('app.scss')
    .scripts([
      '*.js'
    ])
    .livereload()

});
