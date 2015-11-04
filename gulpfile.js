var elixir = require('laravel-elixir');
var gulp = require('gulp');

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
            'jquery.min.js',
            'bootstrap/tooltip.js',
            'bootstrap/alert.js',
            'scripts.js',
        ], 'public/js/scripts.js')
        .version(['public/css/app.css', 'public/js/scripts.js']);

});

gulp.task('copyfonts', function() {
    gulp.src('node_modules/bootstrap-sass/assets/fonts/**/*.{ttf,woff,woff2,eof,svg}')
        .pipe(gulp.dest('public/build/fonts'));
});

gulp.task('copyjs', function() {
    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('resources/assets/js'));
    gulp.src('node_modules/bootstrap-sass/assets/javascripts/bootstrap/*')
        .pipe(gulp.dest('resources/assets/js/bootstrap'));
});