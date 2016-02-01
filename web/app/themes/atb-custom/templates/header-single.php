<?php use Roots\Sage\Titles; ?>

<div class="portfolio-header m-b">
  <div class="portfolio-header__title pull-left">
    <?php if ( function_exists('yoast_breadcrumb') ) yoast_breadcrumb('<div class="breadcrumb">','</div>'); ?>
  </div>
  <div class="portfolio-header__subtitle pull-right">
    <?php
      the_date();
      //get_template_part('templates/entry-meta');
    ?>
  </div>
</div>
