<?php function Content_JournalListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 7,
    'orderby' => is_front_page() ? 'date' : 'rand',
    'posts_per_page' => 3,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ]; ?>
  <?php Component_ListJournal(['suggestions'], $queryArgs); ?>
<?php } ?>

<?php function Block_JournalListSuggestions() { ?>
  <div class='journal-list-suggestions'>
    <?php Component_Section(
      [],
      [
        'tag' => 'section',
        'title' => 'Zapiski',
        'buttonLabel' => 'Więcej Zapisków',
        'buttonHref' => 588
      ],
      'Content_JournalListSuggestions',
      [],
    ); ?>
  </div>
<?php }
