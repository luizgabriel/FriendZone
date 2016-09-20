var elixir = require('laravel-elixir');

var packages = {
    jquery: 'node_modules/jquery/dist/',
    bootstrap: 'node_modules/bootstrap/dist/',
    font_awesome: 'node_modules/font-awesome/',
    ionicons: 'node_modules/ionicons/dist/',
    icheck: 'node_modules/icheck/',
    bootstrap3dialog: 'node_modules/bootstrap3-dialog/dist/',
    typeahead: 'node_modules/typeahead.js/dist/'
};

elixir(function(mix) {
    mix

        .copy(packages.bootstrap + 'fonts', 'public/fonts')
        .copy(packages.bootstrap + 'css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy(packages.bootstrap + 'js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy(packages.jquery + 'jquery.min.js', 'public/js/jquery.min.js')
        .copy(packages.font_awesome + 'fonts', 'public/fonts')
        .copy(packages.font_awesome + 'css/font-awesome.min.css', 'public/css/font-awesome.min.css')
        .copy(packages.ionicons + 'fonts', 'public/fonts')
        .copy(packages.ionicons + 'css/ionicons.min.css', 'public/css/ionicons.min.css')
        .copy(packages.icheck + 'icheck.min.js', 'public/js/icheck.min.js')
        .copy(packages.icheck + 'skins/flat/blue.css', 'public/css/icheck.css')
        .copy(packages.bootstrap3dialog + 'css/bootstrap-dialog.min.css', 'public/css/bootstrap-dialog.min.css')
        .copy(packages.bootstrap3dialog + 'js/bootstrap-dialog.min.js', 'public/js/bootstrap-dialog.min.js')
        .copy(packages.typeahead + 'bloodhound.min.js', 'public/js/bloodhound.js')
        .copy(packages.typeahead + 'typeahead.bundle.min.js', 'public/js/typeahead.bundle.js')
        .copy(packages.typeahead + 'typeahead.jquery.min.js', 'public/js/typeahead.js')

        .coffee('search.coffee', 'public/js/search.js')
        .scripts('app.js', 'public/js/app.js')
        .less('AdminLTE.less', 'public/css/app.css')

});
