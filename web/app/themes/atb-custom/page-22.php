<?php while (have_posts()) : the_post(); ?>

  <div class="page-header">
    <?php get_template_part('templates/page', 'header'); ?>
  </div>

  <table class="table table-sm table--download">

    <thead>
      <tr>
        <th>Thumb</th>
        <th>Title of Piece</th>
        <th>High Resolution</th>
        <th>URL</th>
      </tr>
    </thead>

    <tbody>

      <?php

      $args = array(
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'post_date',
        'order' => 'desc',
        'posts_per_page' => '50',
        'post_status' => 'inherit'
      );

      $loop = new WP_Query($args);

      while ($loop->have_posts()) : $loop->the_post();

        $post_id = get_the_ID();
        $image = wp_get_attachment_image_src($post_id);
        $image_sm = wp_get_attachment_image_src($post_id, 'thumbnail')[0];
        $image_lg = wp_get_attachment_image_src($attachment_id, 'large')[0];
        $title = get_the_title($attachment_id);
        $caption = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);

        ?>

        <tr>
          <td><img class="img-fluid" height="40" width="40" src="<?= $image_sm; ?>" alt="<?= $title; ?>"></td>
          <td><?php the_title(); ?></td>
          <td><a href="<?= get_the_permalink(); ?>">Download</td>
          <td><a href="">View Piece</a></td>
        </tr>

      <?php endwhile; ?>

    </tbody>

  </table>

  <?php // get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>
