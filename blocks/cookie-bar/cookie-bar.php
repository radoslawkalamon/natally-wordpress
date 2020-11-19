<?php function Block_CookieBar() { ?>
  <div class='cookie-bar' data-cookie-bar>
    <span class='cookie-bar__text'>
      Korzystając ze strony 169cm.pl akceptujesz <a href='<?= get_permalink(149); ?>'>Politykę Prywatności.</a>
    </span>
    <button class='cookie-bar__button' type='button' data-cookie-bar-button>
      Akceptuj
    </button>
  </div>
  <script src='<?= get_template_directory_uri(); ?>/blocks/cookie-bar/cookie-bar.js' defer></script>
<?php }