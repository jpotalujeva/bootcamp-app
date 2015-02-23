var gulp = require('gulp');
var phpunit = require('gulp-phpunit');
//var phpcs = require('gulp-phpcs');
var less = require('gulp-less');
var path = require('path');
var browserify = require('browerify');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var uglify = require('gulp-uglify');
var sourcemaps = require('gulp-sourcemaps');



// gulp.task('phpunit', function() {
//     var options = {debug: false};
//     gulp.src('phpunit.xml').pipe(phpunit('./vendor/bin/phpunit',options)).on('error', function(){
//         console.log('Failed');
//     });

gulp.task('less', function () {
  return gulp.src('.resources/assets/less/app.less')
        .pipe(less({
          paths: [ path.join(__dirname, 'node_modules') ]
        }))
        .pipe(gulp.dest('./public/css'));
    });

    gulp.task('javascript', function() {

      var bundler = browserify({
        entries: ['resourses/assets/less/js/app.js'],
        debug: true
      });

      var bundle = function() {
        return bundler
          .bundle()
          .pipe(source('app.js'))
          .pipe(buffer())
          .pipe(sourcemaps.init({loadMaps: true}))
          .pipe(uglify())
          .pipe(sourcemaps.write('./'))
          .pipe(gulp.dest('./public/js/'));
      };

      return bundle();
    });
//});
// gulp.task('phpcs', function(){
//     require gulp.src('classes/**/*.php').({
//         bin:'./vendor/bin/phpcs';
//         standard:'PSR2';
//         warningSeverity:0
//     }))
//     .pipe(phpcs.reporter'log');
//
// })
// gulp.task('watch', function() {
//     gulp.watch('classes/**/*.php', ['phpunit']);
// });
//  gulp.task('default', ['phpunit', 'phpcs', 'watch']);
//

gulp.task('default', ['less', 'javascript']);
