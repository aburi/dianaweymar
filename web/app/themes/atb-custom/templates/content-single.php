<?php while (have_posts()) : the_post();

  if (has_post_format('aside')) {
    $artists = get_post_meta(get_the_ID(), 'artists', true);
    $when = get_post_meta(get_the_ID(), 'when', true);
    $where = get_post_meta(get_the_ID(), 'where', true);
    $opens = get_post_meta(get_the_ID(), 'opens', true);
    $talk = get_post_meta(get_the_ID(), 'talk', true);
    $link = get_post_meta(get_the_ID(), 'link', true);
  }

  ?>

  <article <?php post_class('m-b-3'); ?>>

    <header class="header m-t-2">
      <?php get_template_part('templates/entry-meta'); ?>
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <hr>

    <div class="entry-content">

      <?php
      if (has_post_thumbnail()) {
        $large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
        if (!empty($large_image_url[0])) {
          printf('<a href="%1$s" title="%2$s">%3$s</a>',
            esc_url($large_image_url[0]),
            esc_attr(the_title_attribute(array('echo' => false))),
            get_the_post_thumbnail($post, 'large', array('class' => 'img-fluid m-b-2'))
          );
        }
      }
      ?>

      <?php if (has_post_format('aside')) { ?>

        <?php
        $meta = get_post_meta(get_the_ID());
        if (!empty($meta)) { ?>
          <aside class="aside aside--event m-t-1 m-b-1 m-l-3 pull-xs-right">

            <dl class="">
              <?php if ($artists) { ?>
                <dt class="">Artists</dt>
                <dd class=""><?= $artists; ?></dd>
              <?php } ?>
              <?php if ($when) { ?>
                <dt class="">When</dt>
                <dd class=""><?= $when; ?></dd>
              <?php } ?>
              <?php if ($where) { ?>
                <dt class="">Where</dt>
                <dd class=""><?= $where; ?></dd>
              <?php } ?>
              <?php if ($opens) { ?>
                <dt class="">Opening Reception</dt>
                <dd class=""><?= $opens; ?></dd>
              <?php } ?>
              <?php if ($talk) { ?>
                <dt class="">Artist Talk</dt>
                <dd class=""><?= $talk; ?></dd>
              <?php } ?>
              <?php if ($link) { ?>
                <dt class="">Link</dt>
                <dd class=""><a href="<?= $link; ?>" title="Find out more about this exhibition">Click here for more info</a>
                </dd>
              <?php } ?>
            </dl>

          </aside>
        <?php } ?>

      <?php } else { ?>

      <?php } ?>

      <?php the_content(); ?>

    </div>
    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <hr>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
