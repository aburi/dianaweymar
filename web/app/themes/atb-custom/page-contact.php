
<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>

  <div class="row m-t-3">
    <div class="col-xs-10 col-sm-push-2 col-sm-6">
      <?php the_content(); ?>
      <?php get_template_part('templates/form', 'contact'); ?>
    </div>
  </div>

<?php endwhile; ?>

