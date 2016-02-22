<article class="media <?php post_class(); ?>">

  <?php if (has_post_thumbnail()) {
    $post_thumbnail_id = get_post_thumbnail_id( $post );
    $img = wp_get_attachment_image_src($post_thumbnail_id, 'medium')[0];
    $title = get_the_title($post_thumbnail_id);
    ?>
    <a class="media-left m-r-1" href="<?php the_permalink(); ?>">
      <img height="180" class="media-object" src="<?= $img ?>" alt="<?= $title ?>">
    </a>
  <?php } ?>
  <div class="media-body">
    <header class="entry-header">
      <h2 class="entry-title media-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div>
  </div>

</article>
