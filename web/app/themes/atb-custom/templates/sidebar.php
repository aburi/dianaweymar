<?php // dynamic_sidebar('sidebar-primary'); ?>


<?php

// Get categories by ID
$cats = array( 12,14,16 );
// $cats = get_categories();

// Loop through each category
foreach ($cats as $cat) {

  // Dsiplay 5 most recent posts from each catogory
  $the_query = new WP_Query( "posts_per_page=5&category=$cat" );

  echo '<section class="widget">';

  echo '<h3>' . get_cat_name($cat) . '</h3>';

  // Output the posts as a list
  if ( $the_query->have_posts() ) {

    echo '<ul>';

    while ( $the_query->have_posts() ) {
      $the_query->the_post();
      echo '<li><a href="'. get_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></li>';
    }

    echo '</ul>';

  } else {
    // no posts found
    echo 'no posts found';
  }

  echo '</section>';

  /* Restore original Post Data */
  wp_reset_postdata();

} // foreach

echo '<section class="widget">';
echo '<h3>Facebook</h3>';
echo '</section>';
