<?php function Block_404() { ?>
  <div class='error-404'>
    <p>Strona nie została odnaleziona!</p>
    <div
      class='error-404-animation__wrapper'
      aria-label='Animacja przedstawia rozdymkę unoszącą się na wodzie'
    >
      <img
        alt=''
        aria-hidden='true'
        src='<?= get_template_directory_uri(); ?>/images/error-404-animation-fish.png'
        class='error-404-animation__fish'
      />
      <img
        alt=''
        aria-hidden='true'
        src='<?= get_template_directory_uri(); ?>/images/error-404-animation-wave.png'
        class='error-404-animation__wave error-404-animation__wave-1'
      />
      <img
        alt=''
        aria-hidden='true'
        src='<?= get_template_directory_uri(); ?>/images/error-404-animation-wave.png'
        class='error-404-animation__wave error-404-animation__wave-2'
      />
      <img
        alt=''
        aria-hidden='true'
        src='<?= get_template_directory_uri(); ?>/images/error-404-animation-wave.png'
        class='error-404-animation__wave error-404-animation__wave-3'
      />
    </div>
    <p>Skorzystaj z podpowiedzi wpisów poniżej lub przejdź na <a href='<?= home_url(); ?>'>Stronę Główną</a></p>
  </div>
<?php }