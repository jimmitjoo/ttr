
var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');
require('laravel-elixir-angular');


/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.styles([
        '../assets/bower/bootstrap/dist/css/bootstrap.css',
        'animate.css',
        'style.css'
    ], 'public/css/build.css');

    mix.imagemin('','public/images', { optimizationLevel: 7, progressive: true, interlaced: true });

    mix.scripts([
        '../assets/bower/jquery/dist/jquery.js',
        '../assets/bower/bootstrap/dist/js/bootstrap.js',
        'custom.js'
    ], 'public/js/build.js');

    mix.angular('resources/assets/angular/', 'public/js/angular/', 'application.js');

    mix.version([
        'css/build.css',
        'js/build.js'
    ]);
});

