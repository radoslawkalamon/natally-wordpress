<?php get_header(); ?>
  <main class='main main--page'>
    <article class='article article--page'>
      <?php Block_Meta(
        ['page'],
        [
          'title' => get_the_title()
        ]
      ); ?>
      <?php Block_Content(['page'], apply_filters('the_content', get_the_content())); ?>
    </article>
  </main>
<?php get_footer();