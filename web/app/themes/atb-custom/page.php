<?php get_template_part('templates/metabar'); ?>

<?php while (have_posts()) : the_post(); ?>

  <article class="article article--page m-b-3">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>
  </article>

<?php endwhile; ?>
