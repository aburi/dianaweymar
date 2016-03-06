<?php get_template_part('templates/metabar'); ?>
<?php get_template_part('templates/page', 'header'); ?>

<div class="metabar m-b-1 text-danger"><small>*Note: page under construction - more articles to be added shortly.</small></div>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
