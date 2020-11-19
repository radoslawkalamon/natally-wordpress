<?php function Block_PufferFishAnimation() { ?>
  <div
    class='puffer-fish-animation'
    aria-label='Animacja przedstawia rozdymkę unoszącą się na wodzie'
  >
    <img
      alt=''
      aria-hidden='true'
      src='<?= get_template_directory_uri(); ?>/images/puffer-fish-animation-fish.png'
      class='puffer-fish-animation__fish'
    />
    <img
      alt=''
      aria-hidden='true'
      src='<?= get_template_directory_uri(); ?>/images/puffer-fish-animation-wave.png'
      class='puffer-fish-animation__wave puffer-fish-animation__wave-1'
    />
    <img
      alt=''
      aria-hidden='true'
      src='<?= get_template_directory_uri(); ?>/images/puffer-fish-animation-wave.png'
      class='puffer-fish-animation__wave puffer-fish-animation__wave-2'
    />
    <img
      alt=''
      aria-hidden='true'
      src='<?= get_template_directory_uri(); ?>/images/puffer-fish-animation-wave.png'
      class='puffer-fish-animation__wave puffer-fish-animation__wave-3'
    />
  </div>
<?php }