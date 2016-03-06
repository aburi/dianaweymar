<?php
$when = get_post_meta(get_the_ID(), 'when', true);
?>

<div class="byline author vcard">
  <?php if ($when) { ?>
    <small><strong class="text-warning">Exhibition:</strong> <?= $when; ?></small>
  <?php } else { ?>
    <time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time>
    <!--  &middot; --><? //= __('By', 'sage'); ?><!-- <a href="--><? //= get_author_posts_url(get_the_author_meta('ID')); ?><!--" rel="author" class="fn">--><? //= get_the_author(); ?><!--</a>-->
  <?php } ?>
</div>
