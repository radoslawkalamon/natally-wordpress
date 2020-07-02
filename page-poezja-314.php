<?php get_header(); ?>
  <main class='main main--page-poem'>
    <article class='article article--page-poem'>
      <?php Block_Meta(
        ['page'],
        [
          'title' => get_the_title()
        ]
      ); ?>
      <?php Block_Content(['page'], apply_filters('the_content', get_the_content())); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'section',
        ],
        'Component_ListPoem',
        [[], false],
        'list-poem'
      ); ?>
    </article>
  </main>
<?php get_footer(); ?>