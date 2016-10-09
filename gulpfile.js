const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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
elixir.config.sourcemaps = false;
elixir.config.versioning = {
    buildFolder: ''
};

var node_path = 'node_modules';

var paths = {
    'jquery': node_path + '/jquery',
    'bootstrap': node_path + '/bootstrap',
    'icheck': node_path + '/icheck',
    'jquery.validation': node_path + '/jquery-validation',
    'fontawesome': node_path + '/font-awesome',
};

elixir(mix => {
    mix.less([
        'AdminLTE/AdminLTE.less', 'AdminLTE/skins/skin-green.less'
    ], 'public/css/admin.css')
        .scripts(paths.jquery + '/dist/jquery.min.js', 'public/js/jquery.min.js')
        .scripts(paths.jquery.validation + '/dist/jquery.validate.js', 'public/js/jquery.validate.js')

        .copy(paths.icheck + '/icheck.min.js', 'public/icheck/icheck.min.js')
        .copy(paths.icheck + '/skins', 'public/icheck/skins')

        .copy(paths.bootstrap + '/dist/js/bootstrap.min.js', 'public/bootstrap/js/bootstrap.min.js')
        .copy(paths.bootstrap + '/dist/fonts', 'public/bootstrap/fonts')
        .copy(paths.bootstrap + '/dist/css/bootstrap.min.css', 'public/bootstrap/css/bootstrap.min.css')

        .copy(paths.fontawesome + '/fonts', 'public/font-awesome/fonts')
        .copy(paths.fontawesome + '/css/font-awesome.min.css', 'public/font-awesome/css/font-awesome.min.css')

        .copy('resources/assets/fonts', 'public/fonts')
        .webpack('admin.js')
        .version(['css/admin.css', 'js/admin.js']);
});
