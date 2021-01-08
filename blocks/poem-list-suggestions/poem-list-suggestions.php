
<?php function Content_PoemListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 5,
    'orderby' => is_front_page() ? 'date' : 'rand',
    'posts_per_page' => 6,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ];
  ?>
  <?php Component_ListPoem(['suggestions'], $queryArgs); ?>
<?php } ?>

<?php function Block_PoemListSuggestions() { ?>
  <div class='poem-list-suggestions'>
    <?php Component_Section(
      [],
      [
        'tag' => 'section',
        'title' => 'Poezja 3.14',
        'buttonLabel' => 'Więcej Poezji 3.14',
        'buttonHref' => NATALLY_PAGE_POEMS
      ],
      'Content_PoemListSuggestions',
      [],
    ); ?>
  </div>
<?php }
