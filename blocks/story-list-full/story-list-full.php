<?php function Content_StoryListFull() { ?>
  <?php $queryArgs = [
    'cat' => 3,
    'orderby' => 'date',
    'posts_per_page' => -1,
  ]; ?>
  <?php Component_ListStory(['full'], $queryArgs); ?>
<?php } ?>

<?php function Block_StoryListFull() { ?>
  <?php Component_Section(
    [],
    [
      'tag' => 'section',
      'title' => 'Opowiadania'
    ],
    'Content_StoryListFull',
    [],
  ); ?>
<?php }
