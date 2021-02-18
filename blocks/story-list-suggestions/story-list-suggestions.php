<?php function Content_StoryListSuggestions() { ?>
  <?php $queryArgs = [
    'cat' => 3,
    'orderby' => 'rand',
    'posts_per_page' => 2,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ]; ?>
  <?php Component_ListStory(['suggestions'], $queryArgs); ?>
<?php } ?>

<?php function Block_StoryListSuggestions() { ?>
  <div class='story-list-suggestions'>
    <?php Component_Section(
      [],
      [
        'tag' => 'section',
        'title' => 'Opowiadania',
        'buttonLabel' => 'Więcej opowiadań',
        'buttonHref' => NATALLY_PAGE_STORIES
      ],
      'Content_StoryListSuggestions',
      [],
    ); ?>
  </div>
<?php }
