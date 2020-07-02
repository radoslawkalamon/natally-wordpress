<?php get_header(); ?>
  <?php Block_ProgressBar(); ?>
  <main class='main main--post'>
    <article class='article article--post'>
      <?php Block_Meta(
        ['post'],
        [
          'title' => get_the_title(),
          'dateMachine' => get_the_time('Y-m-d'),
          'dateHuman' => get_the_time('d F Y'),
          'readingTime' => get_post_meta(get_the_ID(), 'reading_time', true)
        ]
      );
      ?>
      <?php Block_CoverImage(
        [],
        [
          'thumbnail' => get_the_post_thumbnail_url(null, 'post-thumbnail-desktop-1x'),
        ]
      ); ?>
      <?php Block_Audiobook(
        [],
        [
          'trackID' => get_post_meta(get_the_ID(), 'soundcloud_track_id', true),
        ]
      ); ?>
      <?php Block_Content(
        ['post'],
        apply_filters('the_content', get_the_content()),
        true
      ); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'aside',
          'title' => 'Podobało się?',
          'buttonLabel' => 'Polub fanpage na Facebooku',
          'buttonHref' => 'https://facebook.com/169cmpl'
        ],
        'Fragment_PlainText',
        [['align-center'], 'Chcesz otrzymywać informacje o nowych tekstach na blogu?'],
        'post-did-you-like'
      ); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'aside',
          'title' => 'Udostępnij'
        ],
        'Component_SocialMediaShare',
        [[], get_the_title(), get_the_permalink()],
        'social-media-share'
      ); ?>
      <?php Component_Section(
        [],
        [
          'tag' => 'aside',
          'title' => 'Skomentuj'
        ],
        'Component_SocialMediaComment',
        [[], get_post_meta(get_the_ID(), 'meta_share_facebook_url', true)],
        'social-media-comment'
      ); ?>
    </article>
    <?php Component_Section(
      [],
      [
        'tag' => 'aside',
        'title' => 'Sprawdź inne',
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
        'tag' => 'aside',
        'title' => 'Coś krótszego?',
        'buttonLabel' => 'Więcej Poezji 3.14',
        'buttonHref' => 343
      ],
      'Component_ListPoem',
      [[], true],
      'list-poem'
    ); ?>
  </main>
<?php get_footer();