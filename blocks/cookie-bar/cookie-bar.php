<?php function Block_CookieBar() { ?>
  <div class='cookie-bar' data-cookie-bar>
    <span class='cookie-bar__text'>
      Korzystając ze strony 169cm.pl akceptujesz <a href='<?= get_permalink(149); ?>'>Politykę Prywatności.</a>
    </span>
    <button class='cookie-bar__button' type='button' data-cookie-bar-button>
      Akceptuj
    </button>
  </div>
<?php }

natally_push_style('blocks-cookie-bar', 'blocks/cookie-bar/cookie-bar.css');
natally_push_script('blocks-cookie-bar', 'blocks/cookie-bar/cookie-bar.js', true);
