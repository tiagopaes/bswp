const gulp = require("gulp");
const sass = require("gulp-sass");

gulp.task(
  "sass",
  gulp.series(() => {
    return gulp
      .src(["node_modules/bootstrap/scss/*.scss", "src/scss/style.scss"])
      .pipe(sass())
      .pipe(gulp.dest("src/css"));
  })
);

gulp.task(
  "watch",
  gulp.series(() => {
    gulp.watch(
      ["node_modules/bootstrap/scss/*.scss", "src/scss/*.scss"],
      gulp.parallel(["sass"])
    );
  })
);

gulp.task('default', gulp.series(['sass', 'watch']))
