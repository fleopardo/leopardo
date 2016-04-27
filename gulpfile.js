/**
* Dependencies
*/
var gulp = require('gulp'),
   $ = require('gulp-load-plugins')(),
   path = require('path');


// Compila los sass del proyecto
gulp.task('css', function() {
   return gulp.src('./scss/global.scss')
       .pipe($.concat('bundle.css'))
       .pipe($.sass())
       .pipe($.postcss([
           require('autoprefixer-core')({
               browsers: ['last 8 versions', 'ie 8']
           }),
       ]))
       .pipe($.postcss([
           require('csswring')({
               preserveHacks: true
           })
       ]))
       .pipe(gulp.dest('./css/'));
});

gulp.task('watch', function() {
   gulp.start('css');
   gulp.watch('./scss/*.scss', ['css']);
});