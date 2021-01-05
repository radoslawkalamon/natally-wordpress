<?php function Block_ProgressBar() { ?>
  <div
    aria-hidden='true'
    class='progress-bar'
    data-progress-bar
  ></div>
<?php }

natally_push_style('blocks-progress-bar', 'blocks/progress-bar/progress-bar.css');
natally_push_script('blocks-progress-bar', 'blocks/progress-bar/progress-bar.js');
