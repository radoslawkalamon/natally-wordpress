<?php get_template_part('components/carousel-poem'); ?>
<?php get_template_part('components/carousel-posts'); ?>
<?php get_template_part('components/the-content-page'); ?>

<?php get_header(); ?>
<?php
  $CarouselPosts = [
    'posts_per_page' => 2,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
    'category__not_in' => [5]
  ];
  $CarouselPoem = [
    'cat' => 5,
    'posts_per_page' => 6,
    'orderby' => 'rand',
    'post__not_in' => [get_the_ID()],
  ];
  $TitleSmall = [
    'title' => 'Porobiło się!',
    'dateMachine' => false,
    'dateHuman' => false,
  ];
  $ContentPage = '
    <p>Strona nie została odnaleziona!</p>
    <p>Skorzystaj z podpowiedzi wpisów poniżej lub przejdź na <a href="'.home_url().'">Stronę Główną</a></p>
  ';
?>
  <article class='post-error-404'>
    <?php Fragment_TitleSmall($TitleSmall); ?>
    <?php Component_TheContentPage($ContentPage); ?>
  </article>
  <section>
    <?php Fragment_TitleSection('Coś dłuższego?'); ?>
    <?php Component_CarouselPosts($CarouselPosts); ?>
    <?php Fragment_ButtonGetMore(0, 'Więcej opowiadań'); ?>
  </section>
  <section>
    <?php Fragment_TitleSection('Coś krótszego?'); ?>
    <?php Component_CarouselPoem($CarouselPoem); ?>
    <?php Fragment_ButtonGetMore(343, 'Więcej Poezji 3.14'); ?>
  </section>
<?php get_footer(); ?>
