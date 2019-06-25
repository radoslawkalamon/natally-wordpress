<?php function Component_TheCookieBar(
  string $privacyPolicyURL = '#'
) { ?>

  <div class='cookie-bar' data-cookie-bar>
    <p class='cookie-bar__text'>
      Korzystając ze strony 169cm.pl akceptujesz <a class='cookie-bar__link' href='<?php echo $privacyPolicyURL; ?>'>Politykę Prywatności</a>.
    </p>
    <button
      type='button'
      class='cookie-bar__button'
      data-cookie-bar-button
    >Akceptuj</a>
  </div>
  <script src='<?php echo get_template_directory_uri(); ?>/js/the-cookie-bar.js' defer></script>

<?php } ?>
