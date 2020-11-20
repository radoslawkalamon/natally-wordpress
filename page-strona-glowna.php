<?php get_header(); ?>
  <main class='main main--index'>
    <article class='article article--index'>
      <?php Block_FrontpageContent(); ?>
      <?php Block_StoryListFull(); ?>
      <?php Block_JournalListSuggestions(); ?>
      <?php Block_PoemListSuggestions(); ?>
    </article>
  </main>
<?php get_footer();