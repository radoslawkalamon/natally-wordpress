(() => {
  'use strict';
  const storageCookieAcceptName = 'cookie-bar-accept';
  const storageCookieAccept = window.localStorage.getItem(storageCookieAcceptName);

  if (storageCookieAccept !== '1') {
    const classNameCookieBarActive = 'cookie-bar--active';
    const elementCookieBar = document.querySelector('[data-cookie-bar]');
    const elementCookieBarButton = elementCookieBar.querySelector('[data-cookie-bar-button]');

    elementCookieBar.classList.add(classNameCookieBarActive);
    elementCookieBarButton.addEventListener('click', () => {
      window.localStorage.setItem(storageCookieAcceptName, 1);
      elementCookieBar.classList.remove(classNameCookieBarActive);
    });
  }
})();
