<footer class="content-info footer m-y-2">
  <div class="container">

    <hr>

    <?php // dynamic_sidebar('sidebar-footer'); ?>

    <div class="clearfix">

      <nav class="pull-right">

        <?php
        if (has_nav_menu('footer_navigation')) :
          wp_nav_menu([
            'theme_location' => 'footer_navigation',
            'menu_class' => 'list-inline nav nav--footer',
            'container' => false
          ]);
        endif;
        ?>

      </nav>

      <ul class="list-inline pull-left">
        <li>&copy; Copyright <?= date("Y"); ?>. Diana Weymar</li>
      </ul>

    </div>

  </div>
</footer>
