<?php

// call the title tag
function bs4wp_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('post-formats', ['aside', 'image']);
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'bs4wp_theme_support');

// prevent error on title tag on old wp versions
if (!function_exists('_wp_render_title_tag')) {
  function bs4wp_render_title() {
    ?>
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php
  }
  add_action('wp_head', 'bs4wp_render_title');
}

//register the custom navigation walker
function register_navwalker() {
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//menus
register_nav_menus([
  'principal' => __('Menu principal', 'bs4wp')
]);


//post thumbnails
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280, 720, true);

//resumo size
add_filter('excerpt_length', function($length) {
  return 50;
});

//pagination
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
  return 'class="btn btn-outline-primary"';
}

//sidebars
register_sidebar([
  'name' => 'Barra Lateral',
  'id' => 'sidebar',
  'before_widget' => '<div class="card mb-4">',
  'after_widget' => '</div></div>',
  'before_title' => '<div class="card-header"><h5>',
  'after_title' => '</h5></div><div class="card-body">',
]);

//search form
register_sidebar([
  'name' => 'Busca',
  'id' => 'busca',
  'before_widget' => '<div class="blog-search">',
  'after_widget' => '</div>',
  'before_title' => '<h5>',
  'after_title' => '</h5>',
]);

//comments
function theme_queue_js() {
  if (!is_admin() && is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_print_scripts', 'theme_queue_js');

function format_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
  <div <?php comment_class('ml-4') ?> id="comment-<?php comment_ID() ?>">
    <div class="card mb-3">
      <div class="card-body">
        <div class="comment-intro">
          <h5 class="card-title"><?php printf(__('%s'), get_comment_author_link()) ?></h5>
          <h6 class="card-subtitle mb-3 text-muted">comentou em <?php printf(__('%1$s'), get_comment_date(), get_comment_time()) ?></h6>
        </div>

        <?php comment_text() ?>

        <div class="reply">
          <?php comment_reply_link(array_merge($args, ['depth' => $depth, 'max_depth' => $args['max_depth']])) ?>
        </div>
      </div>
    </div>
  </div>
  <?php
}

require_once get_template_directory() . '/inc/customizer.php';
