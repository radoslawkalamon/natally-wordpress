<?php function Component_CarouselPosts (
  $queryArgs,
  string $className = ''
) {
  $classNames = implode(' ', [
    'carousel-posts',
    $className !== '' ? 'carousel-posts--'.$className : '',
  ]); ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <div class='<?php echo $classNames ?>'>
    <?php while ($query->have_posts() ) : $query->the_post(); ?>
      <?php Fragment_TileBig([
        'date' => get_the_time('d F Y'),
        'title' => get_the_title(),
        'thumbnail' => get_the_post_thumbnail_url(null, 'medium'),
        'url' => get_the_permalink(),
        'category' => get_the_category(),
        'readingTime' => get_post_meta(get_the_ID(), 'reading_time', true)
      ]); ?>
    <?php endwhile; ?>
  </div>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>
