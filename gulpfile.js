var gulp = require('gulp'),
    less = require('gulp-less');
    livereload = require('gulp-livereload');

gulp.task('compile', function(){
	gulp.src('assets/less/**/.less')
		.pipe( less() )
		.pipe( gulp.dest('assets/css') )
		.pipe(livereload());
});
 
/* gulp.task('styles',function(){
   	gulp.src('assets/vendor/uikit/less/uikit.less')
   	.pipe(less())
   	.pipe(gulp.dest('assets/css'));
 });

 gulp.task('accordion', function(){

 	gulp.src('assets/vendor/uikit/less/components/accordion.less')
   	.pipe(less())
   	.pipe(gulp.dest('assets/css'));
 });*/
//Watch Task
gulp.task('watch',function(){
	livereload.listen();
	gulp.watch('assets/less/*.less',['compile']);
});