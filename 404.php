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
    <div
      class="post-error-404-animation__wrapper"
      aria-label="Animacja przedstawia rozdymkę unoszącą się na wodzie"
    >
      <img
        alt=""
        aria-hidden="true"
        src="'.get_template_directory_uri().'/images/post-error-404-animation-fish.png"
        class="post-error-404-animation__fish"
      />
      <img
        alt=""
        aria-hidden="true"
        src="'.get_template_directory_uri().'/images/post-error-404-animation-wave.png"
        class="post-error-404-animation__wave post-error-404-animation__wave-1"
      />
      <img
        alt=""
        aria-hidden="true"
        src="'.get_template_directory_uri().'/images/post-error-404-animation-wave.png"
        class="post-error-404-animation__wave post-error-404-animation__wave-2"
      />
      <img
        alt=""
        aria-hidden="true"
        src="'.get_template_directory_uri().'/images/post-error-404-animation-wave.png"
        class="post-error-404-animation__wave post-error-404-animation__wave-3"
      />
    </div>
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
    <?php Fragment_Button(0, 'Więcej opowiadań'); ?>
  </section>
  <section>
    <?php Fragment_TitleSection('Coś krótszego?'); ?>
    <?php Component_CarouselPoem($CarouselPoem); ?>
    <?php Fragment_Button(343, 'Więcej Poezji 3.14'); ?>
  </section>
<?php get_footer(); ?>
