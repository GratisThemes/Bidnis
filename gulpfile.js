const gulp    = require( 'gulp' )
const plumber = require( 'gulp-plumber' )
const sass    = require( 'gulp-sass' )(require('sass'))
const prefix  = require( 'gulp-autoprefixer' )
const wpPot   = require( 'gulp-wp-pot' )
const sort    = require( 'gulp-sort' )
const zip     = require( 'gulp-zip' )

const pkg = require('./package.json')

const info = {
  name:      'Bidnis',
  slug:      'bidnis',
  version:   pkg.version,
  author:    'Gratis Themes',
  email:     'gratisthemes@gmail.com',
  bugReport: 'https://github.com/GratisThemes/Bidnis/issues'
}

// CSS
function css() { 
  return gulp.src('./scss/*.scss')
    .pipe(plumber())
    .pipe(sass({ outputStyle: 'expanded', includePaths: ['scss'] }))
    .pipe(prefix(['last 30 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(gulp.dest('./'))
}

// Pot
function pot() {
  return gulp.src('./**/*.php')
    .pipe(plumber())
    .pipe(sort())
    .pipe(wpPot({
        domain: info.slug,
        package: info.slug,
        bugReport: info.bugReport,
        lastTranslator: `${info.author} <${info.email}>`,
        team: `${info.author} <${info.email}>`
    }))
    .pipe(gulp.dest(`./languages/${info.slug}.pot`))
}

// Package
function package() {
  return gulp.src( [
      './**/*.*',
      '!./.git',
      '!./node_modules/**/*.*',
      '!./releases/**/*.*',
      '!./scss/**/*.*',
      '!./.gitignore',
      '!./gulpfile.js',
      '!./package.json',
      '!./package-lock.json',
    ], {
      base: '..'
    })
    .pipe(zip(`${info.slug}_${info.version}.zip`))
    .pipe(gulp.dest('./releases'))
}

// Watch
function watch() {
  gulp.watch('scss/*.scss', {cwd: './'}, css)
  gulp.watch('**/*.php',    {cwd: './'}, pot)
}

module.exports.dev   = gulp.series(css, pot, watch)
module.exports.build = gulp.series(css, pot, package)