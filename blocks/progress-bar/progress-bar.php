<?php function Block_ProgressBar() { ?>
  <div
    aria-hidden='true'
    class='progress-bar'
    data-progress-bar
  ></div>
  <script src='<?= get_template_directory_uri(); ?>/blocks/progress-bar/progress-bar.js' defer></script>
<?php }