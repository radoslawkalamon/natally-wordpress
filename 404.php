<?php get_header(); ?>
  <main class='main main--404'>
    <article class='article article--404'>
      <?php Block_Meta(
        ['page'],
        [
          'title' => 'Porobiło się!'
        ]
      ); ?>
      <?php Block_404(); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'section',
          'title' => 'Opowiadania',
          'buttonLabel' => 'Więcej opowiadań',
          'buttonHref' => 0
        ],
        'Component_ListPost',
        [[], true],
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