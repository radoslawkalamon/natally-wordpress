<?php function Block_JournalListFull() { ?>
  <?php $queryArgs = [
    'cat' => 7,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>
  <?php Component_ListJournal(['full'], $queryArgs); ?>
<?php }
