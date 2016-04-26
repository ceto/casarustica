var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');
var prefix = require('gulp-autoprefixer');

gulp.task('default', function () {
    sass('assets/scss/app.scss', {sourcemap: true, style: 'compact'})
        .pipe(prefix("last 2 versions"))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function() {
  return gulp
    // Watch the input folder for change,
    // and run `sass` task when something happens
    .watch('assets/scss/**/*', ['default'])
    // When there is a change,
    // log a message in the console
    .on('change', function(event) {
      console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
    });
});