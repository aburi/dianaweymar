<?php while (have_posts()) : the_post(); ?>

  <?php // get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/metabar'); ?>

  <div class="row">

    <?php

    // == Galleries
    // 1. Grab ID of Gallery Page (7)
    // 2. Loop through first-descendants
    // 3. Output feature img of each page

//    $galleries = array(28,31,34,37);
    $galleries = array(68,70,74,72);

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
