const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass")); //dart-sass
const postcss = require("gulp-postcss"); //autoprefixerとセット
const autoprefixer = require("autoprefixer"); //ベンダープリフィックスの自動付与
const cssSorter = require("css-declaration-sorter"); //コンパイル後のcssの並び順
const mmq = require("gulp-merge-media-queries"); //メディアクエリをまとめる

const browserSync = require("browser-sync"); //ブラウザを自動で立ち上げ

const cleanCss = require("gulp-clean-css"); //cssの圧縮
const uglify = require("gulp-uglify"); //jsの圧縮
const rename = require("gulp-rename"); //ファイル名の変更

const htmlBeautify = require("gulp-html-beautify"); //htmlの整理

const plumber = require("gulp-plumber"); //エラーが起きても処理を止めない
const notify = require("gulp-notify");  //エラーが起きても処理を止めない

function test(done) {
	console.log("Hello Gulp");
	done();
}

function compileSass() {
	return gulp.src("./src/assets/sass/**/*.scss")
    .pipe(plumber({
        errorHandler:notify.onError('Error: <%= error message %>') //エラーが起きても処理を止めない
    }))
	.pipe(sass())
	.pipe(postcss([autoprefixer(), cssSorter()]))
	.pipe(mmq())
	.pipe(gulp.dest("./public/assets/css/"))
	.pipe(cleanCss())
	.pipe(rename({
		suffix: ".min"
	}))
	.pipe(gulp.dest("./public/assets/css/"))
}

function watch() {
	gulp.watch("./src/assets/sass/**/*.scss", gulp.series(compileSass, browserReload));
	gulp.watch("./src/assets/js/**/*.js", gulp.series(minJS, browserReload));
}

function browserInit(done) {
	browserSync.init({
		server: {
			baseDir: "./public/"
		}
	});
	done();
}

function browserReload(done) {
	browserSync.reload();
	done();
}

function minJS() {
	return gulp.src("./src/assets/js/**/*.js")
    .pipe(plumber({
        errorHandler:notify.onError('Error: <%= error message %>') //エラーが起きても処理を止めない
    }))
	.pipe(uglify())
	.pipe(rename({
		suffix: ".min"
	}))
	.pipe(gulp.dest("./public/assets/js/"))
}

function formatHTML() {
	return gulp.src("./src/**/*.html")
    .pipe(plumber({
        errorHandler:notify.onError('Error: <%= error message %>') //エラーが起きても処理を止めない
    }))
	.pipe(htmlBeautify({
		indent_size: 2,
		indent_with_tabs: true,
	}))
	.pipe(gulp.dest("./public"))
}

function copyImage() {
	return gulp.src("./src/assets/img/**/*")
    .pipe(plumber({
        errorHandler:notify.onError('Error: <%= error message %>') //エラーが起きても処理を止めない
    }))
	//
	.pipe(gulp.dest("./public/assets/img/"))
}

exports.test = test;
exports.compileSass = compileSass;
exports.watch = watch;
exports.browserInit = browserInit;
exports.dev = gulp.parallel(browserInit, watch);
exports.minJS = minJS;
exports.formatHTML = formatHTML;
exports.build = gulp.parallel(formatHTML,minJS,compileSass, copyImage);