<?php function Component_CarouselPoem (
  $queryArgs,
  string $title = 'Poezja 3.14',
  string $className = '',
  bool $addID = false
) {
  $classNames = implode(' ', [
    'carousel-poem',
    $className !== '' ? 'carousel-poem--'.$className : '',
  ]); ?>
  <?php $query = new WP_Query($queryArgs); ?>
  <?php if ($query->have_posts()) : ?>

  <section
    class='<?php echo $classNames ?>'
    <?php if ($addID) : ?> id='section_poem' <?php endif; ?>
  >
    <?php Fragment_TitleSection($title, 'no-margin-bottom'); ?>
    <div data-carousel-poems-wrapper>
      <?php while ($query->have_posts() ) : $query->the_post(); ?>
        <?php Fragment_TileSmall([
          'date' => get_the_time('d F Y'),
          'title' => get_the_title(),
          'thumbnail' => get_the_post_thumbnail_url(),
          'url' => get_the_permalink(),
        ]); ?>
      <?php endwhile; ?>
    </div>
  </section>
  <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script>
    $('[data-carousel-poems-wrapper]').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: true,
      variableWidth: true
    });
  </script>

  <?php wp_reset_postdata(); ?>
  <?php endif; ?>
<?php } ?>
