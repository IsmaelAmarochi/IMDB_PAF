var gulp = require('gulp')
var sass = require('gulp-sass')(require('sass'));
var uglify = require('gulp-uglify');

gulp.task('styles', function () {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
});

gulp.task('uglify', function () {
    return gulp.src('js/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('./js_min/'))
});

gulp.task('default', function () {
    gulp.watch('sass/**/*.scss', gulp.series('styles'));
    gulp.watch('js/*.js', gulp.series('uglify'));
});