
var elixir = require('laravel-elixir');
require('laravel-elixir-imagemin');
require('laravel-elixir-angular');

var Q = require("q");

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

function first() {

    var deferred = Q.defer();

    elixir(function(mix) {

        mix.styles([
            '../bower/bootstrap/dist/css/bootstrap.css',
            'font-awesome.css',
            'animate.css',
            'style.css'
        ], 'public/css/build.css');

        mix.imagemin('', 'public/images', {optimizationLevel: 7, progressive: true, interlaced: true});

        mix.scripts([
            '../bower/jquery/dist/jquery.js',
            '../bower/bootstrap/dist/js/bootstrap.js',
            'custom.js'
        ], 'public/js/build.js');

        mix.angular('resources/assets/angular/', 'public/js/angular/', 'application.js');

        mix.version([
            'css/build.css',
            'js/build.js'
        ]);

        deferred.resolve();
    });

    return deferred.promise;

}


function second() {

    var deferred = Q.defer();

    elixir(function(mix) {

        mix.copy(
            'resources/assets/bower/components-font-awesome/fonts',
            'public/build/fonts'
        );

        deferred.resolve();

    });

    return deferred.promise;
}

first().then(second).done();