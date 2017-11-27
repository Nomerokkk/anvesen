'use strict';

const gulp         = require('gulp');
const sass         = require('gulp-sass');
const concat       = require('gulp-concat');
const uglify       = require('gulp-uglify');
const cleanCSS     = require('gulp-clean-css');
const imagemin     = require('gulp-imagemin');
const pngquant     = require('imagemin-pngquant');
const rename       = require('gulp-rename');
const cache        = require('gulp-cache');
const notify       = require('gulp-notify');
const autoprefixer = require('gulp-autoprefixer');
const babel        = require('gulp-babel');
const csscomb      = require('gulp-csscomb');
const del          = require('del');
const browserSync  = require('browser-sync');


gulp.task('sass', function() {
    return gulp.src('app/scss/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'}).on("error", notify.onError()))
    .pipe(autoprefixer(['last 15 versions']))
    .pipe(gulp.dest('dist/css'))
    .pipe(browserSync.reload({stream: true}));
});

gulp.task('scripts', function() {

    return gulp.src('app/js/**/*.js')
        .pipe(babel({presets: ['es2015', 'stage-0']}))
        .on('error', notify.onError({
            message: '<%= error.message %>',
            title: 'Babel Error!',
        }))
        .pipe(rename({suffix: '.compiled'}))
        .pipe(gulp.dest('dist/js'))
        .pipe(browserSync.stream());
});

gulp.task('imagemin', function() {
    return gulp.src('app/img/**/*')
    .pipe(cache(imagemin()))
    .pipe(gulp.dest('dist/img')); 
});

gulp.task('build', ['imagemin', 'sass'], function() {

    var buildCss = gulp.src([
        'app/css/main.css',
        ]).pipe(gulp.dest('dist/css'));

    var buildCommon = gulp.src([
        'app/js/common.js',
        ]).pipe(gulp.dest('dist/js'));

    var buildFonts = gulp.src([
        'app/fonts/**/*',
        ]).pipe(gulp.dest('dist/fonts'));

});

gulp.task('browser-sync', function() {
    browserSync.init({
        notify: false,
        proxy: 'anvesen',
    });
});

gulp.task('watch', ['sass', 'browser-sync', 'build', 'scripts'], function() {
    gulp.watch('app/scss/**/*.scss', ['sass']).on('change', browserSync.reload);
    gulp.watch(['libs/**/*.js', 'app/js/common.js'], ['scripts']).on('change', browserSync.reload);
    gulp.watch('**/*.php').on('change', browserSync.reload);
    gulp.watch('app/img/**/*', ['imagemin']).on('change', browserSync.reload);
});

gulp.task('clearcache', function () { return cache.clearAll(); });

gulp.task('default', ['watch', 'build']);
