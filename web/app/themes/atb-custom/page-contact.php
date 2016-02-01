
<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/page', 'header'); ?>

  <div class="row">

    <div class="col-sm-push-3 col-sm-4">

      <div class="text-center">
        <?php // the_content(); ?>
      </div>

      <?php get_template_part('templates/form', 'contact'); ?>

    </div>

  </div>

<?php endwhile; ?>

