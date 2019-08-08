<?php function Component_CarouselPoem (
  $queryArgs,
  string $className = ''
) {
  $classNames = implode(' ', [
    'carousel-poem',
    $className !== '' ? 'carousel-poem--'.$className : '',
  ]); ?>
  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <div class='<?php echo $classNames ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Fragment_TileSmall(
        [
          'date' => get_the_time('d F Y'),
          'title' => get_the_title(),
          'thumbnail' => get_the_post_thumbnail_url(),
          'url' => get_the_permalink(),
        ],
      ); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>
