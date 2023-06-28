const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function () {
    return gulp.src('assets/scss/index.scss')
        .pipe(sass())
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
    gulp.watch('assets/scss/**/*.scss', gulp.series('sass'));
});

gulp.task('default', gulp.series('sass', 'watch'));
