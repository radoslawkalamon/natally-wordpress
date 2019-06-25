<?php function Component_CarouselPosts (
  $queryArgs,
  string $title = 'Opowiadania',
  string $className = ''
) {
  $classNames = implode(' ', [
    'carousel-posts',
    $className !== '' ? 'carousel-posts--'.$className : '',
  ]); ?>

  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <section class='<?php echo $classNames ?>'>
    <?php Fragment_TitleSection($title, 'no-margin-bottom'); ?>
    <div class='carousel-posts__wrapper'>
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
  </section>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>
