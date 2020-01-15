<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta <?php bloginfo('charset'); ?>>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>

<body>
  <div class="container">
    <div class="row my-5 align-items-center">
      <div class="col-12 col-md-6">

        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

        if (has_custom_logo()) {
          echo '<img src="' . esc_url($logo[0]) . '" class="img-fluid">';
        } else {
          echo '<h1>' . get_bloginfo('name') . '</h1>';
          echo '<p class="lead">' . get_bloginfo('description') . '</p>';
        }
        ?>
      </div>
      <div class="col-12 col-md-4 offset-md-2">
        <?php dynamic_sidebar('Busca') ?>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded" role="navigation">
          <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu([
              'theme_location'    => 'principal',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'collapse navbar-collapse',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ]);
            ?>
          </div>
        </nav>
      </div>
    </div>
