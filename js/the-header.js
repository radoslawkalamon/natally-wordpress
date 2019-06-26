(() => {
  'use strict';
  const elementHamburger = document.querySelector('[data-hamburger]');
  const elementNavigation = document.querySelector('[data-navigation]');
  const elementNavigationLinks = elementNavigation.querySelectorAll('.menu-item a');
  const classNameNavigationActive = 'header__navigation--active';
  
  elementHamburger.addEventListener('click', (e) => {
    e.preventDefault();
    elementNavigation.classList.toggle(classNameNavigationActive);
  });

  elementNavigationLinks.forEach(element => {
    element.addEventListener('click', () => {
      elementNavigation.classList.toggle(classNameNavigationActive, false);
    });
  });
})();
