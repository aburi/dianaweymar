<?php use Roots\Sage\Titles; ?>

<!--<header class="header--page text-xs-center m-b-1 --><?php //if (is_page( 9 )) echo 'sr-only'; ?><!--">-->
<!--  <h1>--><?//= Titles\title(); ?><!--</h1>-->
<!--</header>-->

<header class="header header--page sr-only <?= ( is_page('contact') ) ? 'sr-only' : ''; ?>">
  <h1 class="header__title"><?= Titles\title(); ?></h1>
  <div class="header__subtitle">Lorem Ipsum</div>
</header>
