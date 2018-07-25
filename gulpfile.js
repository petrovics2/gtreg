var gulp = require('gulp');
var sass = require('gulp-sass');

var scssFiles = 'dev/scss/*',
    cssDest = 'public/style/';

gulp.task('styles', function(){
    gulp.src(scssFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

gulp.task('bsScript', function() {
    gulp.src('node_modules/bootstrap/dist/js/bootstrap.min.js')
        .pipe(gulp.dest('./public/script/'));
});

gulp.task('jqueryScript', function() {
    gulp.src('node_modules/jquery/dist/jquery.min.js')
        .pipe(gulp.dest('./public/script/'));
});

gulp.task('popperScript', function() {
    gulp.src('node_modules/popper.js/dist/popper.min.js')
        .pipe(gulp.dest('./public/script/'));
});

gulp.task('watch', function() {
   gulp.watch(scssFiles, ['styles']); 
});

gulp.task('default', ['bsScript', 'jqueryScript', 'popperScript']);