    </main>
    <footer class='footer'>
      <div class='footer__copyright'>
        <?= get_bloginfo('name'); ?> &copy; 2014 - <?= date('Y'); ?>
      </div>
      <a
        class='footer__logo-wrapper'
        href='<?= get_the_author_meta('user_url', 1); ?>'
        rel='noopener noreferrer'
      >
        <img
          alt='<?= get_the_author_meta('display_name', 1); ?>'
          class='footer__logo'
          src='<?= get_template_directory_uri(); ?>/images/radoslawkuswik_pl_logo.svg'
        />
      </a>
      <?php Fragment_Menu('footer-menu', 'footer-menu'); ?>
    </footer>
    <?php get_template_part('components/the-cookie-bar'); ?>
    <?php Component_TheCookieBar('/polityka-prywatnosci/'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
