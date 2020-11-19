(() => {
  'use strict';
  const cookiesAcceptedName = 'cookie-bar-accept';
  const cookiesAcceptedValue = '3';
  const cookiesAccepted = window.localStorage.getItem(cookiesAcceptedName);

  if (cookiesAccepted !== cookiesAcceptedValue) {
    const cookieBar = document.querySelector('[data-cookie-bar]');
    const cookieBarCSSActive = 'cookie-bar--active';
    const cookieBarButton = cookieBar.querySelector('[data-cookie-bar-button]');

    cookieBar.classList.add(cookieBarCSSActive);

    cookieBarButton.addEventListener('click', () => {
      window.localStorage.setItem(cookiesAcceptedName, cookiesAcceptedValue);
      cookieBar.classList.remove(cookieBarCSSActive);
    });
  }
})();
