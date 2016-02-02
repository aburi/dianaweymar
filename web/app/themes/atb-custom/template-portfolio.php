<?php
/**
 * Template Name: Portfolio Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

  <?php get_template_part('templates/headers/portfolio', 'header'); ?>

  <?php // get_template_part('templates/content', 'page'); ?>

  <div class="row">

    <?php

    // 1. Get the post's gallery
    // 2. Get attachment IDs from gallery
    // 3. Loop through IDs and get attachment details

    $gallery = get_post_gallery($post, false);
    $attachment_ids = explode(",", $gallery['ids']);

    foreach ($attachment_ids as $attachment_id) {

      // $link        = wp_get_attachment_url($id);

      // Option #1
      // [0] => url, [1] => width, [2] => height
      $image_sm = wp_get_attachment_image_src($attachment_id, 'thumbnail')[0];
      $image_lg = wp_get_attachment_image_src($attachment_id, 'full')[0];
      $title = get_the_title($attachment_id);
      $caption = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);


      // Option #2
      // $attachment  = get_post( $attachment_id );
      // $caption     = $attachment->post_excerpt;
      // $description = $attachment->post_content;
      // $src         = $attachment->guid;
      // $title       = $attachment->post_title;
      // $alt         = get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true );
      // $href        = get_permalink( $attachment->ID );


      // Option #3
      // $at= wp_get_attachment($attachment_id);
      // print_r($at); // show array of all image detail like title , caption etc

      ?>

      <div class="col-xs-5 col-sm-2 m-b-2">
        <div class="card-piece">
          <a href="<?= $image_lg; ?>" data-lightbox="<?= get_the_title(); ?>"
             data-title="<?= $title . '<em>' . $caption . '</em><a>test</a>'; ?>">
            <img height="300" width="300" class="img-fluid" src="<?= $image_sm; ?>" alt="<?= $title; ?>">
          </a>
        </div>
      </div>

    <?php } ?>

  </div>

<?php endwhile; ?>

<!-- <img class="lazy" data-original="<?= get_template_directory_uri(); ?>/dist/images/slide2.jpg" width="640" height="480">
 -->

<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/3.3.0/ekko-lightbox.min.js"></script> -->

<!--TODO add scripts to main.js-->
<script>

  jQuery(document).ready(function ($) {

    // Lazy Load
    $(".lazy").lazyload({
      skip_invisible: false,
      effect: "fadeIn",
      threshold: 150
    });

  });

</script>
