<?php get_header(); ?>
  <main class='main main--single-poem'>
    <article class='article article--single-poem'>
      <?php Block_PoemThumbnail(); ?>
      <?php Block_PoemMeta(); ?>
      <?php Block_PoemContent(); ?>
    </article>
    <?php Block_PoemFirstTime(); ?>
    <?php Block_PoemListSuggestions(); ?>
    <?php Block_StoryListSuggestions(); ?>
    <?php Block_JournalListSuggestions(); ?>
  </main>
<?php get_footer();