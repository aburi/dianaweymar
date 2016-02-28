<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/metabar'); ?>

  <article class="article article--page m-b-3">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php $feat_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
    <img class="img-fluid m-b-2" src="<?= $feat_image; ?>" alt="Diana Weymar">
    <?php get_template_part('templates/content', 'page'); ?>
  </article>

<?php endwhile; ?>
