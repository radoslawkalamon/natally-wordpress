<?php function Block_CookieBar(
  string $privacyPolicyURL = '#'
) { ?>

  <div class='cookie-bar' data-cookie-bar>
    <span class='cookie-bar__text'>
      Korzystając ze strony 169cm.pl akceptujesz <a href='<?= $privacyPolicyURL; ?>'>Politykę Prywatności.</a>
    </span>
    <button class='button button--invert cookie-bar__button' type='button' data-cookie-bar-button>
      Akceptuj
    </button>
  </div>
  <script src='<?= get_template_directory_uri(); ?>/blocks/cookie-bar/cookie-bar.js' defer></script>

<?php }