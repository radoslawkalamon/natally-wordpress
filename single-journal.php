<?php get_header(); ?>
  <main class='main main--single-journal'>
    <article class='article article--single-journal'>
      <?php Block_JournalMeta(); ?>
      <?php Block_Audiobook(); ?>
      <?php Block_JournalContent(); ?>
    </article>
    <?php Block_DidYouLike(); ?>
    <?php Block_JournalListSuggestions(); ?>
    <?php Block_StoryListSuggestions(); ?>
    <?php Block_PoemListSuggestions(); ?>
  </main>
<?php get_footer();