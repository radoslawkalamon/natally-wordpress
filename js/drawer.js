(() => {
  'use strict';
  const drawerAttribute = 'data-drawer';
  const drawerActiveClassName = 'drawer--active';
  const drawerButtonAttribute = 'data-drawer-button'
  const drawerButtonActiveClassName = 'drawer-button--active';

  const drawers = [...document.querySelectorAll(`[${drawerAttribute}]`)];
  const drawerButtons = [...document.querySelectorAll(`[${drawerButtonAttribute}]`)];

  drawerButtons.forEach((button) => {
    const drawerLocation = button.getAttribute(drawerButtonAttribute);
    const drawerToToggle = drawers
      .filter((element) => element.getAttribute(drawerAttribute) === drawerLocation)
      .shift();

    button.addEventListener('click', () => {
      drawers.forEach((element) => {
        element !== drawerToToggle && element.classList.remove(drawerActiveClassName);
      });    
      drawerButtons.forEach((element) => {
        element !== button && element.classList.remove(drawerButtonActiveClassName);
      });

      drawerToToggle.classList.toggle(drawerActiveClassName);
      button.classList.toggle(drawerButtonActiveClassName);
    });
  });

  document.addEventListener('click', (e) => {
    const isDrawersOpen = drawers
      .map((element) => element.classList.contains(drawerActiveClassName))
      .includes(true);

    if (isDrawersOpen) {
      const drawersClicked = [...drawers, ...drawerButtons].map((element) => element.contains(e.target));

      if (!drawersClicked.includes(true)) {
        drawers.forEach((element) => element.classList.remove(drawerActiveClassName));
        drawerButtons.forEach((element) => element.classList.remove(drawerButtonActiveClassName));
      }
    }
  });
})();