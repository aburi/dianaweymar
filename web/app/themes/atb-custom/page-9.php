<?php while (have_posts()) : the_post(); ?>

  <article class="article article--page">

    <div class="row">
      <div class="col-sm-push-1 col-sm-8">

        <?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

        <img class="img-fluid m-y-2" src="<?= $feat_image; ?>" alt="Diana Weymar">

        <?php get_template_part('templates/page', 'header'); ?>
        <?php get_template_part('templates/content', 'page'); ?>

      </div>
    </div>

  </article>

<?php endwhile; ?>
