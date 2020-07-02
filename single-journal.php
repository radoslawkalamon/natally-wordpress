<?php get_header(); ?>
  <main class='main main--post-journal'>
    <article class='article article--post-journal'>
      <?php Block_Meta(); ?>
      <?php Block_Content(['post-journal'], apply_filters('the_content', get_the_content())); ?>
      <!-- Article <main> -->
    </article>
    Single aside journal
    <!-- Article <aside> -->
  </main>
<?php get_footer();