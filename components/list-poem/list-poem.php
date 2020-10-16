<?php function Component_ListPoem(
  array $styleClasses = [],
  bool $isShortList = false
) { 
  $classNames = [
    'list-poem',
    ...array_map(fn($element) => 'list-poem--'.$element, $styleClasses),
  ];
  $queryArgs = [
    'cat' => 5,
    'orderby' => $isShortList ? 'rand' : 'date',
    'posts_per_page' => $isShortList ? 6 : -1,
    'post__not_in' => is_single() ? [get_the_ID()] : [],
  ];
  ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <div class='<?= implode(' ', $classNames); ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Fragment_TilePoem(
        $styleClasses,
        [
          'dateHuman' => get_the_date(),
          'dateMachine' => get_the_date('Y-m-d'),
          'title' => get_the_title(),
          'thumbnail' => get_the_post_thumbnail_url(),
          'permalink' => get_the_permalink(),
        ]
      ); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php }