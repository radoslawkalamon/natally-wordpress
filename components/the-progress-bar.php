<?php function Component_TheProgressBar() { ?>

  <div
    aria-hidden='true'
    class='progress-bar'
    data-the-progress-bar
  ></div>
  <script src='<?= get_template_directory_uri(); ?>/js/the-progress-bar.js' defer></script>

<?php } ?>
