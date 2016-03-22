var gulp        = require("gulp");
var sass        = require("gulp-sass");
var browserSync = require("browser-sync").create();
var sourcemaps = require('gulp-sourcemaps');

gulp.task('serve', ['sass'], function(){
    browserSync.init({
        server : {
            proxy : "local.dev"
        }
    });

    gulp.watch('resources/assets/sass/*.scss' , ['sass']);
    gulp.watch('resources/assets/view/*.php').on('change', browserSync.reload);
});

gulp.task('sass' , function (){
  return gulp.src('./resources/assets/sass/main.scss')
       .pipe(sass())
       .pipe(gulp.dest('../css'))
       .pipe(browserSync.reload({stream : true}))
});


gulp.task('default', ['serve']);