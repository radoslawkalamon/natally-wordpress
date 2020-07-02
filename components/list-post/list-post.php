<?php function Component_ListPost(
  array $styleClasses = [],
  bool $isShortList = false
) { 
  $classNames = [
    'list-post',
    ...array_map(fn($element) => 'list-post--'.$element, $styleClasses),
  ];
  $queryArgs = [
    'category__not_in' => [5],
    'orderby' => $isShortList ? 'rand' : 'date',
    'posts_per_page' => $isShortList ? 2 : -1,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ];
  ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Fragment_TilePost(
        $styleClasses,
        [
          'audiobook' => get_post_meta(get_the_ID(), 'soundcloud_track_id', true),
          'dateHuman' => get_the_time('d F Y'),
          'dateMachine' => get_the_time('Y-m-d'),
          'title' => get_the_title(),
          'thumbnail' => get_the_post_thumbnail_url(null, 'post-thumbnail-desktop-1x'),
          'permalink' => get_the_permalink(),
          'readingTime' => get_post_meta(get_the_ID(), 'reading_time', true)          
        ]
      ); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }