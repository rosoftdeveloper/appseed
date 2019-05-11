var gulp = require('gulp');
var clean = require('gulp-clean');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var mq4HoverShim = require('mq4-hover-shim');
var rimraf = require('rimraf').sync;
var browser = require('browser-sync');
var panini = require('panini');
var concat = require('gulp-concat');
var port = process.env.SERVER_PORT || 8080;
var nodepath =  'node_modules/';
var assetspath =  'src/assets/';

// Starts a BrowerSync instance
gulp.task('server', ['build'], function(){
    browser.init({server: './_site', port: port});
});

// Watch files for changes
gulp.task('watch', function() {
    gulp.watch('src/scss/**/*', ['compile-scss', browser.reload]);
    gulp.watch('src/sass/**/*', ['compile-sass', browser.reload]);
    gulp.watch('src/js/**/*', ['copy-js', browser.reload]);
    gulp.watch('src/images/**/*', ['copy-images', browser.reload]);
    gulp.watch('src/html/pages/**/*', ['compile-html']);
    gulp.watch(['src/html/{layouts,includes,helpers,data}/**/*'], ['compile-html:reset','compile-html']);
    gulp.watch(['./src/{layouts,partials,helpers,data}/**/*'], [panini.refresh]);
});

// Erases the dist folder ??
gulp.task('reset', function() {
    rimraf('bulma/*');
    rimraf('scss/*');
    rimraf('assets/css/*');
    rimraf('assets/fonts/*');
    rimraf('images/*');
});

// Erases the dist folder
gulp.task('clean', function() {
    rimraf('_site');
});

// Copy Bulma filed into Bulma development folder
gulp.task('setupBulma', function() {
    //Get Bulma from node modules
    gulp.src([nodepath + 'src/bulma/*.sass']).pipe(gulp.dest('src/bulma/'));
    gulp.src([nodepath + 'src/bulma/**/*.sass']).pipe(gulp.dest('src/bulma/'));
});

// Copy static assets
gulp.task('copy', function() {
    //Copy other external font and data assets
    gulp.src(['src/assets/fonts/**/*']).pipe(gulp.dest('_site/assets/fonts/'));
    gulp.src([nodepath + 'slick-carousel/slick/fonts/**/*']).pipe(gulp.dest('_site/assets/css/fonts/'));
    gulp.src([nodepath + 'slick-carousel/slick/ajax-loader.gif']).pipe(gulp.dest('_site/assets/css/'));
});

//Theme Sass variables
var sassOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed',
    includePaths: [nodepath + 'bulma/sass']
};

//Theme Scss variables
var scssOptions = {
    errLogToConsole: true,
    outputStyle: 'compressed',
    includePaths: ['./src/scss/partials']
};

// Compile Bulma Sass
gulp.task('compile-sass', function () {
    var processors = [
        mq4HoverShim.postprocessorFor({ hoverSelectorPrefix: '.is-true-hover ' }),
        autoprefixer({
            browsers: [
                "Chrome >= 45",
                "Firefox ESR",
                "Edge >= 12",
                "Explorer >= 10",
                "iOS >= 9",
                "Safari >= 9",
                "Android >= 4.4",
                "Opera >= 30"
            ]
        })//,
        //cssnano(),
    ];
    //Watch me get Sassy
    return gulp.src('./src/bulma/bulma.sass')
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./_site/assets/css/'));
});

// Compile Theme Scss
gulp.task('compile-scss', function () {
    var processors = [
        mq4HoverShim.postprocessorFor({ hoverSelectorPrefix: '.is-true-hover ' }),
        autoprefixer({
            browsers: [
                "Chrome >= 45",
                "Firefox ESR",
                "Edge >= 12",
                "Explorer >= 10",
                "iOS >= 9",
                "Safari >= 9",
                "Android >= 4.4",
                "Opera >= 30"
            ]
        })//,
        //cssnano(),
    ];
    //Watch me get Sassy
    return gulp.src('./src/scss/core.scss')
        .pipe(sourcemaps.init())
        .pipe(sass(sassOptions).on('error', sass.logError))
        .pipe(postcss(processors))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('./_site/assets/css/'));
});

// Compile Html
gulp.task('compile-html', function() {
    gulp.src('src/html/pages/**/*.html')
        .pipe(panini({
        root: 'src/html/pages/',
        layouts: 'src/html/layouts/',
        partials: 'src/html/includes/',
        helpers: 'src/html/helpers/',
        data: 'src/html/data/'
    }))
        .pipe(gulp.dest('_site'))
        .on('finish', browser.reload);
});

gulp.task('compile-html:reset', function(done) {
    panini.refresh();
    done();
});

// Compile css from node modules
gulp.task('compile-css', function() {
    return gulp.src([ 
        nodepath + 'slick-carousel/slick/slick.css',
        nodepath + 'slick-carousel/slick/slick-theme.css',
        //Additional static css assets
        assetspath + 'css/icons.min.css',
    ])
        .pipe(concat('app.css'))
        .pipe(gulp.dest('./_site/assets/css/'));
});

// Compile js from node modules
gulp.task('compile-js', function() {
    return gulp.src([ 
        nodepath + 'jquery/dist/jquery.min.js', 
        nodepath + 'slick-carousel/slick/slick.min.js', 
        nodepath + 'scrollreveal/dist/scrollreveal.min.js',
        nodepath + 'waypoints/lib/jquery.waypoints.min.js',
        nodepath + 'waypoints/lib/shortcuts/sticky.min.js',
        nodepath + 'jquery.counterup/jquery.counterup.min.js',
        nodepath + 'jquery-lazy/jquery.lazy.min.js',
        //Additional static js assets
        assetspath + 'js/ggpopover/ggpopover.min.js',
        assetspath + 'js/ggpopover/ggtooltip.js',
        assetspath + 'js/embed/embed.js',
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./_site/assets/js/'));
});

//Copy Theme js to production site
gulp.task('copy-js', function() {
    gulp.src('src/js/**/*.js')
        .pipe(gulp.dest('./_site/assets/js/'));
});

//Copy images to production site
gulp.task('copy-images', function() {
    gulp.src('src/images/**/*')
        .pipe(gulp.dest('./_site/assets/images/'));
});

//Copy images to production site
gulp.task('copy-icons', function() {
    gulp.src('src/assets/css/icons.css')
        .pipe(gulp.dest('./_site/assets/css/'));
});

gulp.task('init', ['setupBulma']);
gulp.task('build', ['clean','copy', 'compile-js', 'compile-css', 'copy-js', 'compile-sass', 'compile-scss', 'compile-html', 'copy-icons', 'copy-images']);
gulp.task('default', ['server', 'watch']);
