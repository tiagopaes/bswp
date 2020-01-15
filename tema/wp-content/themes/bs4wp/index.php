<?php get_header() ?>

<div class="row">
  <div class="col-12 col-md-8">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('content', get_post_format()) ?>
      <?php endwhile; ?>
    <?php else : get_404_template();
    endif; ?>


    <div class="blog-pagination mb-5">
      <?php next_posts_link('Mais antigos') ?>
      <?php previous_posts_link('Mais novos') ?>
    </div>
  </div>

  <?php get_sidebar() ?>
</div>

</div>

<?php get_footer() ?>
