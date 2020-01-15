<div class="w-100 bg-secondary border-top border-dark mt-5">
  <div class="container">
    <div class="row">
      <div class="col py-5 text-center text-white">
        <h5><?php echo get_theme_mod('footer_title', 'Meu primeiro tema wordpress') ?></h5>
        <p><?php echo get_theme_mod('footer_text', 'Feito com muita dedicação e esforço!') ?></p>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/popper.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
</body>

</html>
