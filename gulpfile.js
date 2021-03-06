var gulp = require('gulp');
var less = require('gulp-less');
var browserSync = require('browser-sync').create();

gulp.task('less', function() {
    return gulp.src('less/**/*.less')
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }))
})

// Copy vendor libraries from /node_modules into /vendor
gulp.task('copy', function() {
    gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
        .pipe(gulp.dest('vendor/bootstrap'))

    gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('vendor/jquery'))
		
	gulp.src(['node_modules/jquery-ui/jquery-ui.js', 'node_modules/jquery-ui/jquery-ui.min.js', 'node_modules/jquery-ui/jquery-ui.css', 'node_modules/jquery-ui/jquery-ui.min.css'])
        .pipe(gulp.dest('vendor/jquery-ui'))
		
	gulp.src(['node_modules/jquery-ui/images/**/*'])
        .pipe(gulp.dest('vendor/jquery-ui/images'))

    gulp.src(['node_modules/fancybox/dist/css/jquery.fancybox.css'])
        .pipe(gulp.dest('vendor/fancybox/css'))

    gulp.src(['node_modules/fancybox/dist/img/**/*'])
        .pipe(gulp.dest('vendor/fancybox/img'))

    gulp.src(['node_modules/fancybox/dist/js/jquery.fancybox.js'])
        .pipe(gulp.dest('vendor/fancybox/js'))

    gulp.src([
            'node_modules/font-awesome/**',
            '!node_modules/font-awesome/**/*.map',
            '!node_modules/font-awesome/.npmignore',
            '!node_modules/font-awesome/*.txt',
            '!node_modules/font-awesome/*.md',
            '!node_modules/font-awesome/*.json'
        ])
        .pipe(gulp.dest('vendor/font-awesome'))
})

// Run everything
gulp.task('default', ['less', 'copy']);

// Configure the browserSync task
gulp.task('browserSync', function() {
    browserSync.init({
        proxy: "prime.loc/index.php",
		notify: false
    })
})

// Dev task with browserSync
gulp.task('dev', ['browserSync', 'less'], function() {
    gulp.watch('less/*.less', ['less']);
    // Reloads the browser whenever HTML or JS files change
    gulp.watch('themes/*.html', browserSync.reload);
	gulp.watch('themes/**/*.php', browserSync.reload);
    gulp.watch('js/**/*.js', browserSync.reload);
});