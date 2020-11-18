<?php get_header(); ?>
  <main class='main main--error-404'>
    <article class='article article--error-404'>
      <?php Block_Error404Meta(); ?>
      <?php Block_PufferFishAnimation(); ?>
      <?php Block_Error404Content(); ?>
      <?php Block_StoryListSuggestions(); ?>
      <?php Block_JournalListSuggestions(); ?>
      <?php Block_PoemListSuggestions(); ?>
    </article>
  </main>
<?php get_footer();