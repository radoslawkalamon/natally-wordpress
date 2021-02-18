<?php function Block_Footer() { ?>
  <footer class='footer'>
    <div class='footer__copyright'>
      &copy; <?= date('Y'); ?> <a href='<?= get_the_author_meta('user_url', 1); ?>' rel='noopener noreferrer'>Radosław Kalamon</a>
    </div>
    <div class='footer__menu'>
      <?php Component_Menu(['footer'], 'footer-menu'); ?>
    </div>
  </footer>
<?php }

$args['QUEUE_STYLES']->push('blocks-footer', 'blocks/footer/footer.css');
