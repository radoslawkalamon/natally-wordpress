<?php get_header(); ?>
  <?php Block_ProgressBar(); ?>
  <main class='main main--single-story'>
    <article class='article article--single-story'>
      <?php Block_StoryMeta(); ?>
      <?php Block_StoryThumbnail(); ?>
      <?php Block_Audiobook(); ?>
      <?php Block_StoryContent(); ?>
    </article>
    <?php Block_DidYouLike(); ?>
    <?php Block_StoryListSuggestions(); ?>
    <?php Block_JournalListSuggestions(); ?>
    <?php Block_PoemListSuggestions(); ?>
  </main>
<?php get_footer();