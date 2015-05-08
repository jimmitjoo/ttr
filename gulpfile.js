
var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');


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
        '../assets/bower/angular/angular.js'
    ], 'public/js/build.js');
});

