// Gulpfile

var gulp = require('gulp'),
	sass = require('gulp-sass')(require('sass'));

// SCSS -> CSS
var css_compile = (done) => {
	gulp.src('./src/style.scss')
		.pipe(
			sass({
				outputStyle: 'compressed',
			}).on('error', sass.logError)
		)
		.pipe(gulp.dest('./'));
	done();
};

// run compiler
gulp.task('css:compile', css_compile);

// watch for changes, then run compiler
gulp.task('css:watch', () => {
	return gulp.watch('./src/_scss/**/*.scss', css_compile);
});

// call this one
gulp.task('css', gulp.series('css:compile', 'css:watch'));
