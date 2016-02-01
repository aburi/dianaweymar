<?php while (have_posts()) : the_post(); ?>

  <div class="page-header sr-only">
    <?php get_template_part('templates/page', 'header'); ?>
  </div>

  <div class="row">

    <?php

    // == Galleries
    // 1. Grab ID of Gallery Page (161)
    // 2. Loop through first-descendents
    // 3. Output feature img of each page

    $galleries = array(9,7,11,17);

    foreach( $galleries as $id ) {

      $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'large' )[0];
      // $image_url = wp_get_attachment_url( get_post_thumbnail_id($id) );
      $link      = get_the_permalink($id);
      $title     = get_the_title($id);

    ?>

      <div class="col-xs-10 col-sm-5">

        <div class="card-gallery" style="background-image: url('<?= $image_url; ?>'); ">

          <a class="link-reset" href="<?= $link; ?>" title="View this gallery">

            <div class="darken-on-hover va-container fill">
              <h2 class="card-gallery__title"><?= $title; ?></h2>
            </div>

          </a>

        </div>

      </div>

    <?php } ?>

  </div>

  <?php // get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
