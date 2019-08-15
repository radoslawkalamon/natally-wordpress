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
  $ContentArchive = apply_filters('the_content', get_the_content());
?>
<?php get_header(); ?>
<article class='post-page post-page--poem-archive'>
  <?php Fragment_TitleSmall($TitleSmall); ?>
  <?php Component_TheContentPage($ContentArchive); ?>
  <?php Component_CarouselPoem($CarouselPoem, 'archive'); ?>
</article>
<?php get_footer(); ?>
