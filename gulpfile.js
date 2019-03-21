const gulp = require('gulp')
const autoprefixer = require('gulp-autoprefixer')
const sass = require('gulp-sass')

gulp.task('sass', () => 
    gulp.src('sources/scss/**/*.scss')
        .pipe(sass({
            outputStyle: 'expanded'
        }))
        .pipe(autoprefixer({
            versions: ['last 2 browser']
        }))
        .pipe(gulp.dest('deploy/css'))
)

gulp.task('watch', () => {
        gulp.watch('sources/scss/**/*.scss', gulp.series('sass'))
    }      
)

gulp.task('default', gulp.parallel('sass', 'watch'))