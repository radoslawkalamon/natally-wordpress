<?php function Block_ProgressBar() { ?>
  <div
    aria-hidden='true'
    class='progress-bar'
    data-progress-bar
  ></div>
<?php }

$args['QUEUE_STYLES']->push('blocks-progress-bar', 'blocks/progress-bar/progress-bar.css');
$args['QUEUE_SCRIPTS']->push('blocks-progress-bar', 'blocks/progress-bar/progress-bar.js');
