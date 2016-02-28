<?php while (have_posts()) :
  the_post(); ?>
  <article <?php post_class('m-b-3'); ?>>

    <?php get_template_part('templates/metabar'); ?>

    <header class="header m-b-2">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php // get_template_part('templates/entry-meta'); ?>
    </header>

    <hr>

    <div class="entry-content">
      <?php
      if (has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        if (!empty($large_image_url[0])) {
          printf('<a href="%1$s" title="%2$s">%3$s</a>',
            esc_url($large_image_url[0]),
            esc_attr(the_title_attribute(array( 'echo' => false ))),
            get_the_post_thumbnail($post, 'large', array('class' => 'img-fluid m-b-2'))
          );
        }
      }
      ?>
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php');
    ?>
  </article>
<?php endwhile; ?>
