<header class="banner text-center">
  <div class="container">
    <a class="brand h1" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav nav--primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'list-inline m-b-0',
          'container' => false
        ]);
      endif;
      ?>
    </nav>
  </div>
</header>
