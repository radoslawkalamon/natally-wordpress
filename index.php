<?php get_header(); ?>
  <main class='main main--index'>
    <article class='article article--index'>
      <!-- Article <main> -->
      <?php Component_Section(
        [],
        [
          'tag' => 'section',
        ],
        'Component_ListPost',
        [['front-page']],
        'list-post'
      ); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'section',
          'title' => 'Poezja 3.14',
          'buttonLabel' => 'Więcej Poezji 3.14',
          'buttonHref' => 343
        ],
        'Component_ListPoem',
        [[], true],
        'list-poem'
      ); ?>
    </article>
  </main>
<?php get_footer();