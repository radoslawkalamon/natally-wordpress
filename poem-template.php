<?php
/**
* Template Name: Poem Archive Template
*/
?>
<?php get_template_part('components/carousel-poem'); ?>

<?php
  $TitleSmall = [
    'title' => get_the_title(),
    'dateMachine' => false,
    'dateHuman' => false,
  ];
  $CarouselPoem = [
    'cat' => 5,
    'nopaging' => true,
  ];
?>
<?php get_header(); ?>
<section class='poem-archive'>
  <?php Fragment_TitleSmall($TitleSmall); ?>
  <?php echo apply_filters('the_content', get_the_content()); ?>
</section>
<?php Component_CarouselPoem($CarouselPoem, false); ?>
<?php get_footer(); ?>
