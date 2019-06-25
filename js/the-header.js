(() => {
  'use strict';
  const elementHamburger = document.querySelector('[data-hamburger]');
  const elementNavigation = document.querySelector('[data-navigation]');
  const classNameNavigationActive = 'header__navigation--active';
  
  elementHamburger.addEventListener('click', (e) => {
    e.preventDefault();
    elementNavigation.classList.toggle(classNameNavigationActive);
  });
})();
