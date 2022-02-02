'use strict';

var gulp         = require('gulp');
var watch        = require('gulp-watch');
var concat       = require('gulp-concat');
var sass         = require('gulp-sass')(require('sass'));
var rename       = require('gulp-rename');
var uglify       = require('gulp-uglify');
var autoprefixer = require('gulp-autoprefixer');

var paths = {
	scss_core        : [ 'core/assets/scss/**/*.scss', 'core/assets/css/' ],
	scss_module_star : [ 'module/star/assets/scss/**/*.scss', 'module/star/assets/css/' ],
};

/** Core */
gulp.task( 'scss_core', function() {
	return gulp.src( paths.scss_core[0] )
		.pipe( sass( { 'outputStyle': 'expanded' } ).on( 'error', sass.logError ) )
		.pipe( autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( gulp.dest( paths.scss_core[1] ) )
		.pipe( sass({outputStyle: 'compressed'}).on( 'error', sass.logError ) )
		.pipe( rename( './style.min.css' ) )
		.pipe( gulp.dest( paths.scss_core[1] ) );
});

/** Module Star */
gulp.task( 'scss_module_star', function() {
	return gulp.src( paths.scss_module_star[0] )
		.pipe( sass( { 'outputStyle': 'expanded' } ).on( 'error', sass.logError ) )
		.pipe( autoprefixer({
			browsers: ['last 2 versions'],
			cascade: false
		}) )
		.pipe( gulp.dest( paths.scss_module_star[1] ) )
		.pipe( sass({outputStyle: 'compressed'}).on( 'error', sass.logError ) )
		.pipe( rename( './style.min.css' ) )
		.pipe( gulp.dest( paths.scss_module_star[1] ) );
});


/** Watch */
gulp.task( 'default', function() {
	gulp.watch( paths.scss_core[0], gulp.series('scss_core') );
	gulp.watch( paths.scss_module_star[0], gulp.series('scss_module_star') );
});
