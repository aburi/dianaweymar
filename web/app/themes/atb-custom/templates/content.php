<article <?php post_class('p-b-2 m-b-2'); ?>>

  <div class="row">

    <?php if (has_post_thumbnail()) {
      $post_thumbnail_id = get_post_thumbnail_id($post);
      $img = wp_get_attachment_image_src($post_thumbnail_id, 'medium')[0];
      $title = get_the_title($post_thumbnail_id);
      ?>
      <div class="col-sm-4">
        <a href="<?php the_permalink(); ?>" title="Read more">
          <img height="180" class="img-fluid" src="<?= $img ?>" alt="<?= $title ?>">
        </a>
      </div>
    <?php } ?>

    <div class="col-sm-6">
      <header class="entry-header">
        <?php get_template_part('templates/entry-meta'); ?>
        <h2 class="entry-title media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </header>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div>
    </div>
  </div>

</article>
