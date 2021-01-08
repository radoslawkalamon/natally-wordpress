<?php function Block_PoemListFull() { ?>
  <?php $queryArgs = [
    'cat' => 5,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>
  <?php Component_ListPoem(['full'], $queryArgs); ?>
<?php }
