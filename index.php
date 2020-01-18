<?php get_template_part('components/carousel-poem'); ?>

<?php
  $CarouselPoem = [
    'cat' => 5,
    'posts_per_page' => 6,
  ];
?>

<?php get_header(); ?>
<section class='front-page-posts'>
  <?php while (have_posts()) : the_post(); ?>
    <?php Fragment_TileBig(
      [
        'audiobook' => get_post_meta(get_the_ID(), 'soundcloud_track_id', true),
        'date' => get_the_time('d F Y'),
        'title' => get_the_title(),
        'thumbnail' => get_the_post_thumbnail_url(null, 'medium'),
        'url' => get_the_permalink(),
        'category' => get_the_category(),
        'readingTime' => get_post_meta(get_the_ID(), 'reading_time', true)
      ],
      'front-page-post'
    ); ?>
  <?php endwhile; ?>
</section>
<section>
  <?php Fragment_TitleSection('Poezja 3.14'); ?>
  <?php Component_CarouselPoem($CarouselPoem); ?>
  <?php Fragment_Button(343, 'Więcej Poezji 3.14'); ?>
</section>
<?php get_footer(); ?>
