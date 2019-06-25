<?php get_template_part('components/the-content-page'); ?>
<?php get_header(); ?>
  <?php 
    $TitleSmall = [
      'title' => get_the_title(),
      'dateMachine' => false,
      'dateHuman' => false,
    ];
    $ContentPage = apply_filters('the_content', get_the_content());
  ?>
  <article class='post-page'>
    <?php Fragment_TitleSmall($TitleSmall); ?>
    <?php Component_TheContentPage($ContentPage); ?>
  </article>
<?php get_footer(); ?>
