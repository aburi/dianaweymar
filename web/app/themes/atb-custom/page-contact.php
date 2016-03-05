<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>

  <div class="row m-t-3">
    <div class="col-xs-10 col-sm-push-2 col-sm-6 text-xs-center">
      <?php the_content(); ?>
      <?php // get_template_part('templates/form', 'contact'); ?>
      <p>Diana can be reached at:<br/> <a class="" href="mailto:diana@weymar.com">diana@weymar.com</a></p>
    </div>
  </div>

<?php endwhile; ?>

