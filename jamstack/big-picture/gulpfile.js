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
const zip = require('gulp-zip');
var port = process.env.SERVER_PORT || 8080;
var nodepath =  'node_modules/';
var assetspath =  'assets/';
   
// Starts a BrowerSync instance
gulp.task('server', ['build'], function(){
    browser.init({server: './_site', port: port});
});

// Watch files for changes
gulp.task('watch', function() {
    gulp.watch('src/assets/sass/**/*', ['compile-sass', browser.reload]);
    gulp.watch('src/assets/js/**/*', ['copy-js', browser.reload]);
    gulp.watch('src/images/**/*', ['copy-images', browser.reload]);
    gulp.watch('src/html/pages/**/*', ['compile-html']);
    gulp.watch(['src/html/{layouts,includes,helpers,data}/**/*'], ['compile-html:reset','compile-html']);
    gulp.watch(['./src/{layouts,partials,helpers,data}/**/*'], [panini.refresh]);
});

// Erases the dist folder
gulp.task('reset', function() {
    rimraf('scss/*');
    rimraf('assets/css/*');
    rimraf('assets/fonts/*');
    rimraf('images/*');
});

// Erases the dist folder
gulp.task('clean', function() {
    rimraf('_site');
});

gulp.task('zipme', () =>
    gulp.src('_site/*')
        .pipe(zip('website.zip'))
        .pipe(gulp.dest('_site/'))
);

// Copy static assets
gulp.task('copy', function() {
    //Copy other external font and data assets
    gulp.src(['src/assets/css/**/*']).pipe(gulp.dest('_site/assets/css/'));
    gulp.src(['src/assets/js/**/*']).pipe(gulp.dest('_site/assets/js/'));
    gulp.src(['src/assets/fonts/**/*']).pipe(gulp.dest('_site/assets/fonts/'));
    gulp.src(['src/images/**/*']).pipe(gulp.dest('_site/images/'));
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
    includePaths: ['./scss/partials']
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
    return gulp.src('./bulma/bulma.sass')
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
    return gulp.src('./scss/core_flashy.scss')
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
        nodepath + 'wallop/css/wallop.css',
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
    ])
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./_site/assets/js/'));
});

//Copy Theme js to production site
gulp.task('copy-js', function() {
    gulp.src('src/assets/js/**/*.js')
        .pipe(gulp.dest('./_site/assets/js/'));
});

//Copy images to production site
gulp.task('copy-images', function() {
    gulp.src('src/images/**/*!(*.psd)')
        .pipe(gulp.dest('./_site/images/'));
});

gulp.task('build', ['clean','copy', 'compile-js', 'compile-css', 'copy-js', 'compile-sass', 'compile-html', 'copy-images']);
gulp.task('zip', ['zipme']);
gulp.task('default', ['server', 'watch']);
