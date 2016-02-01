<?php while (have_posts()) : the_post(); ?>

  <article class="article article--page">

    <div class="row">
      <div class="col-sm-push-1 col-sm-8">

        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>

      </div>
    </div>

  </article>

<?php endwhile; ?>
