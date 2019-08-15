(() => {
  const attrLazyLoading = 'data-background-lazy-loading';
  const arrayElements = document.querySelectorAll(`[${attrLazyLoading}]`);
  const loadBackgroundImage = (element) => {
    let URLThumbnail = element.getAttribute(attrLazyLoading);
    element.style.backgroundImage = `url(${URLThumbnail})`;
  };

  if (('IntersectionObserver' in window) === true) {
    const callbackObserver = (entries) => { 
      entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
          loadBackgroundImage(entry.target);
        }
      });
    };
    const configObserver = {
      threshold: 0.01,
    };
    const observer = new IntersectionObserver(callbackObserver, configObserver);
    arrayElements.forEach((element) => {
      observer.observe(element);
    });
  } else {
    arrayElements.forEach(element => {
      loadBackgroundImage(element);
    });
  }
})();
