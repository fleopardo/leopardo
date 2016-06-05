/**
* Dependencies
*/
var gulp = require('gulp');
var mkdirp = require('mkdirp');
var del = require('del');
var cssnano = require('cssnano');
var mergeStream = require('merge-stream');
var objectAssign = require('object-assign');
var handlebars = require('handlebars');
var autoprefixer = require('autoprefixer');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync').create();
var paths = require('./config/paths');
var bundles = require('./config/bundles');


gulp.task('clean', function () {
    mkdirp.sync(paths.build.root);
    return del.sync([paths.build.root + '*'], {'force': true});
});


gulp.task('templates', function () {
    mkdirp.sync(paths.build.templates);
    var tasks = [];
    Object.keys(bundles.templates).forEach(function (bundle) {
        tasks.push(gulp.src(bundles.templates[bundle])
            .pipe($.handlebars({'handlebars': handlebars}))
            .pipe($.wrap('Handlebars.template(<%= contents %>)'))
            .pipe($.declare({
                'namespace': 'App.templates',
                'noRedeclare': true
            }))
            .pipe($.concat(bundle + '.js'))
            .pipe($.size({'title': 'Handlebars templates size:'}))
            .pipe(gulp.dest(paths.build.templates))
        );
    });

    return mergeStream(tasks);
});

gulp.task('styles', function () {
    mkdirp.sync(paths.build.styles);

    var tasks = [];
    Object.keys(bundles.styles).forEach(function (bundle) {
        tasks.push(gulp.src(bundles.styles[bundle])
            .pipe($.plumber())
            .pipe($.sass({'style': 'expanded'}))
            .pipe($.postcss([
                autoprefixer({'browsers': ['last 5 versions', 'android >= 2.1', '> 1%']}),
                cssnano({'autoprefixer': false})
            ]))
            .pipe($.concat(bundle + '.css'))
            .pipe($.size({'title': 'Size of CSS bundle (build) "' + bundle + '.css":'}))
            .pipe(browserSync.stream())
            .pipe(gulp.dest(paths.build.styles))
        );
    });

    return mergeStream(tasks);
});


gulp.task('scripts', function () {
        mkdirp.sync(paths.build.scripts);

        var tasks = [];
        Object.keys(bundles.scripts).forEach(function (name) {
            tasks.push(gulp.src(bundles.scripts[name])
                .pipe($.plumber())
                .pipe($.concat(name + '.js'))
                // .pipe($.uglify())
                .pipe($.size({'title': 'Size of JS bundle (build) "' + name + '.js":'}))
                .pipe(browserSync.stream())
                .pipe(gulp.dest(paths.build.scripts))
            );
        });

        return mergeStream(tasks);
    });


gulp.task('fonts', function () {
    mkdirp.sync(paths.build.fonts);

    var tasks = [];
    Object.keys(bundles.fonts).forEach(function (bundle) {
        tasks.push(gulp.src(bundles.fonts[bundle])
            .pipe($.size({'title': 'Fonts size (build):'}))
            .pipe(browserSync.stream())
            .pipe(gulp.dest(paths.build.fonts))
        );
    });

    return mergeStream(tasks);
});


gulp.task('images', function () {
    mkdirp.sync(paths.build.images);

    var tasks = [];
    Object.keys(bundles.images).forEach(function (bundle) {
        tasks.push(gulp.src(bundles.images[bundle])
            .pipe($.imageOptimization())
            .pipe($.size({'title': 'Images size (build):'}))
            .pipe(browserSync.stream())
            .pipe(gulp.dest(paths.build.images))
        );
    });

    return mergeStream(tasks);
});


gulp.task('build', function() {

});

gulp.task('build', function() {
    gulp.start('default');
});

gulp.task('templatesWatch', $.sync(gulp).sync([
    'templates',
    'scripts'
]));

gulp.task('default', $.sync(gulp).sync([
    'clean',
    'templates',
    ['styles', 'scripts', 'fonts', 'images']
]));


gulp.task('serve', ['build'], function() {

    browserSync.init({
        server: "./"
    });

    gulp.watch('./src/styles/**/*.scss', ['styles']);
    gulp.watch('./src/templates/*.hbs', ['templatesWatch']);
    gulp.watch('./src/scripts/**/*.js', ['scripts']);
    gulp.watch('./src/images/**/*.{png,gif,jpg,webp,jpeg,ico}', ['images']);
    gulp.watch('./src/fonts/*.{eot,otf,svg,ttf,woff,woff2}', ['fonts']);

    gulp.watch("./*.html").on('change', browserSync.reload);
});

gulp.task('watch', function() {
   gulp.start('build');
   gulp.watch('./src/styles/**/*.scss', ['styles']);
   gulp.watch('./src/templates/*.hbs', ['templatesWatch']);
   gulp.watch('./src/scripts/**/*.js', ['scripts']);
   gulp.watch('./src/images/**/*.{png,gif,jpg,webp,jpeg,ico}', ['images']);
   gulp.watch('./src/fonts/*.{eot,otf,svg,ttf,woff,woff2}', ['fonts']);
});
