gulp   = require 'gulp'
coffee = require 'gulp'
browserSync = require 'browser-sync'

gulp.task 'coffee', () ->
	gulp.src ['dev/scripts/**/*.coffee']
		.pipe coffee()
		.pipe gulp.dest('dist/js/')

gulp.task('watch', ['build'], function(){
	gulp.watch ['dev/scripts/**/*.coffee'] ['coffee']
})

gulp.task('default', ['browser-sync', 'watch'])
