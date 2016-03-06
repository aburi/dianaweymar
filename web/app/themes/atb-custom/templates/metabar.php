<div class="metabar clearfix m-b-1 sr-only">

  <!--    <a href="-->
  <? //= get_the_permalink(24); ?><!--" title="See all listings">&#171; Back to Exhibitions &amp; News</a>-->
  <!--    --><?php //if ( function_exists('yoast_breadcrumb') )
  //      {yoast_breadcrumb('<div class="breadcrumbs pull-xs-left">','</div>');} ?>

  <div class="breadcrumbs pull-xs-left">
    <?php
    if (is_home()) {
      echo 'Latest Articles';
    } elseif (is_single()) {
      $categories = get_the_category();
      if (!empty($categories)) {
        echo esc_html($categories[0]->name);
      }
    } else {
      get_the_title(get_the_ID());
    }
    ?>
  </div>
  <div class="pull-xs-right">
    <?php
    if (is_page()) :
      echo get_post_meta(get_the_ID(), 'subtitle', true);
    elseif (is_home()):
      echo '';
    elseif (is_single()):
      echo get_template_part('templates/entry-meta');
    else :
      echo 'placeholder';
    endif;
    ?>
  </div>

</div>

