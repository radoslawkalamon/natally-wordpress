<?php function Block_CookieBar() { ?>
  <div class='cookie-bar' data-cookie-bar>
    <span class='cookie-bar__text'>
      Korzystając ze strony 169cm.pl akceptujesz <a href='<?= get_permalink(NATALLY_PAGE_PRIVACY_POLICY); ?>'>Politykę Prywatności.</a>
    </span>
    <button class='cookie-bar__button' type='button' data-cookie-bar-button>
      Akceptuj
    </button>
  </div>
<?php }

$args['QUEUE_STYLES']->push('blocks-cookie-bar', 'blocks/cookie-bar/cookie-bar.css');
$args['QUEUE_SCRIPTS']->push('blocks-cookie-bar', 'blocks/cookie-bar/cookie-bar.js');
