(() => {
  'use strict';
  const attrLazyLoading = 'data-background-lazy-loading';
  const elements = document.querySelectorAll(`[${attrLazyLoading}]`);
  const loadBackgroundImage = (element) => {
    let URLThumbnail = element.getAttribute(attrLazyLoading);
    element.style.backgroundImage = `url(${URLThumbnail})`;
    element.removeAttribute(attrLazyLoading);
  };

  if (('IntersectionObserver' in window) === true) {
    const callbackObserver = (entries, observer) => { 
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          loadBackgroundImage(entry.target);
          observer.unobserve(entry.target);
        }
      });
    };
    const configObserver = {
      root: null,
      margin: '0px 0px 0px 0px',
      threshold: 0,
    };
    const observer = new IntersectionObserver(callbackObserver, configObserver);
    elements.forEach((element) => {
      observer.observe(element);
    });
  } else {
    elements.forEach(element => {
      loadBackgroundImage(element);
    });
  }
})();
