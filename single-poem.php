<?php get_header(); ?>
  <main class='main main--post-poem'>
    <article class='article article--post-poem'>
      <?php Block_Meta(
        ['post-poem'],
        [
          'title' => get_the_title(),
          'dateMachine' => get_the_time('Y-m-d'),
          'dateHuman' => get_the_time('d F Y')
        ]
      ); ?>
      <?php Block_Content(
        ['post-poem'],
        apply_filters('the_content', get_the_content())
      ); ?>
      <!-- Article <main> -->
      <?php Component_Section(
        ['poem-first-time'],
        [
          'tag' => 'aside',
          'title' => 'Pierwszy raz?',
          'buttonLabel' => 'Tak, z przyjemnością!',
          'buttonHref' => 343
        ],
        'Fragment_PlainText',
        [['align-center'], 'Chcesz dowiedzieć się więcej o Poezji 3.14?'],
        'poem-first-time'
      ); ?>
    </article>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Sprawdź inne',
        'buttonLabel' => 'Więcej Poezji 3.14',
        'buttonHref' => 343
      ],
      'Component_ListPoem',
      [[], true],
      'list-poem'
    ); ?>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Coś dłuższego?',
        'buttonLabel' => 'Więcej opowiadań',
        'buttonHref' => 0
      ],
      'Component_ListPost',
      [[], true],
      'list-post'
    ); ?>
  </main>
<?php get_footer();