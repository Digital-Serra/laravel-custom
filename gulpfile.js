var elixir = require('laravel-elixir');
var bowerDir = 'vendor/bower_components/';
var gulp = require('gulp');

//Disable generate *.css.map on compile .less files
elixir.config.sourcemaps = false;

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
    mix.copy([
            bowerDir + 'bootstrap/fonts',
            bowerDir + 'font-awesome/fonts'
        ],
        'public/fonts'
    )

        //Compiling font awesome and bootstrap into a single file
        .less([
            '../../../'+bowerDir + 'bootstrap/less/bootstrap.less',
            '../../../'+bowerDir + 'font-awesome/less/font-awesome.less'],
        'public/css/app.css'
    )

    //Copy Sweetalert assets to public
    .copy(bowerDir + 'sweetalert/dist/sweetalert.css','public/css')
    .copy(bowerDir + 'sweetalert/dist/sweetalert.min.js','public/js')

    //Copy Datetimepicker and momentum assets to public
    .copy(bowerDir + 'eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css','public/css')
    .copy(bowerDir + 'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js','public/js')
    .copy(bowerDir + 'moment/min/moment.min.js','public/js')

    //Copy jquery, bootstrap and Particles.js to js folder
    .copy(bowerDir + 'jquery/dist/jquery.min.js','public/js')
    .copy(bowerDir + 'bootstrap/dist/js/bootstrap.min.js','public/js')
    .copy(bowerDir + 'particles.js/particles.min.js','public/js/auth/')
});