const gulp = require( 'gulp' ),
	fancylog = require( 'fancy-log' ),
	browserSync = require( 'browser-sync' ),
	server = browserSync.create(),
	dev_url = 'cfa.test',
	webp = require('gulp-webp'),
	changed = require('gulp-changed'),
	imagemin = require('gulp-imagemin');

/**
 * Define all source paths
 */

var paths = {
	styles: {
		src: './assets/src/scss/*.scss',
		dest: './assets/build/css'
	},	
	blocks: {
		src: './assets/src/scss/blocks/**/*.scss',
		dest: './assets/build/css/blocks/'
	},
	scripts: {
		src: './assets/src/js/*.js',
		dest: './assets/build/js/'
	},
	images: {
		src: './assets/src/img/*.+(png|jpg|jpeg)',
		dest: './assets/build/img/'
	}
};


/**
 * Webpack compilation: http://webpack.js.org, https://github.com/shama/webpack-stream#usage-with-gulp-watch
 * 
 * build_js()
 */

function build_js() {
	const compiler = require( 'webpack' ),
		webpackStream = require( 'webpack-stream' );

	return gulp.src( paths.scripts.src )
		.pipe(
			webpackStream( {
				config: require( './webpack.config.js' )
			},
				compiler
			)
		)
		.pipe(
			gulp.dest( paths.scripts.dest )
		)
		.pipe(
			server.stream() // Browser Reload
		);
}


/**
 * SASS-CSS compilation: https://www.npmjs.com/package/gulp-sass
 * 
 * build_css()
 */

function build_css() {
	const sass = require( 'gulp-sass' )( require( 'sass' ) ),
		postcss = require( 'gulp-postcss' ),
		sourcemaps = require( 'gulp-sourcemaps' ),
		autoprefixer = require( 'autoprefixer' ),
		cssnano = require( 'cssnano' );

	const plugins = [
		autoprefixer(),
		cssnano(),
	];

	return gulp.src( paths.styles.src )
		.pipe(
			sourcemaps.init()
		)
		.pipe(
			sass()
				.on( 'error', sass.logError )
		)
		.pipe(
			postcss( plugins )
		)
		.pipe(
			sourcemaps.write( './' )
		)
		.pipe(
			gulp.dest( paths.styles.dest )
		)
		.pipe(
			server.stream() // Browser Reload
		);
}


function build_blocks() {
	const sass = require( 'gulp-sass' )( require( 'sass' ) ),
		postcss = require( 'gulp-postcss' ),
		sourcemaps = require( 'gulp-sourcemaps' ),
		autoprefixer = require( 'autoprefixer' ),
		cssnano = require( 'cssnano' );

	const plugins = [
		autoprefixer(),
		cssnano(),
	];

	return gulp.src( paths.blocks.src )
		.pipe(
			sourcemaps.init()
		)
		.pipe(
			sass()
				.on( 'error', sass.logError )
		)
		.pipe(
			postcss( plugins )
		)
		.pipe(
			sourcemaps.write( './' )
		)
		.pipe(
			gulp.dest( paths.blocks.dest )
		)
		.pipe(
			server.stream() // Browser Reload
		);
}


/**
 * Watch task: Webpack + SASS
 * 
 * $ gulp watch
 */

gulp.task( 'watch',
	function () {
		// Modify "dev_url" constant and uncomment "server.init()" to use browser sync
		server.init({
			proxy: dev_url,
		} );

		gulp.watch( paths.scripts.src, build_js );
		gulp.watch( [ paths.styles.src, './assets/src/scss/*.scss' ], build_css );
		gulp.watch( [ paths.blocks.src, './assets/scss/blocks/**/*.scss', './assets/scss/**/**/*.scss' ], build_blocks );
	}
);


gulp.task('imgmin', () =>
	gulp.src(paths.images.src)
		.pipe(changed(paths.images.dest))
		.pipe(imagemin({verbose:true}))
        // .pipe(webp({quality: 100}))
		.pipe(gulp.dest(paths.images.dest))
);

gulp.task('webp', () =>
    gulp.src(paths.images.src)
        .pipe(webp({quality: 100}))
        .pipe(gulp.dest(paths.images.dest))
);
