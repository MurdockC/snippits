var gulp = require('gulp'),
	sass = require('gulp-sass'),
	php = require('gulp-connect-php'),
	autoprefixer = require('gulp-autoprefixer');
	browserSync = require('browser-sync');

gulp.task('sass', function() {
	return gulp.src('assets/css/*.scss')
		.pipe(sass())
		.pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
		.pipe(gulp.dest('assets/css/'))
		.pipe(browserSync.reload({stream: true}));
});

gulp.task('php', function() {
    php.server({ base: '../template', port: 8011, keepalive: true});
});

gulp.task('browser-sync',['php'], function() {
    browserSync({
        proxy: '127.0.0.1:8011',
        port: 8080,
        open: true,
        notify: false
    });
});

gulp.task('watch', ['browser-sync', 'sass'], function() {
	gulp.watch('assets/css/*.scss', [sass]);
	gulp.watch('**/*.php', browserSync.reload);
	gulp.watch('*.js', browserSync.reload);
});
