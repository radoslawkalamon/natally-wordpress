(function () {
  const _ = {
    throttle: function (n, u, l) { var r = null, i = !0; return function () { var t = function () { n.apply(this, arguments), r = null }; l && i && (i = !1, t()), r || (r = setTimeout(t, u)) } },
  };

  const moduleProgressBar = function (elementTextSelector, elementProgressBarSelector, throttleTimeout) {
    // Variables
    this.elementText = document.querySelector(elementTextSelector);
    this.elementTextBottom = window.innerHeight;
    this.elementProgressBar = document.querySelector(elementProgressBarSelector)
    // Functions
    this.callbackUpdateTextHeight = function () {
      const elementTextBoundingRect = this.elementText.getBoundingClientRect();
      const elementTextTop = elementTextBoundingRect.top;
      const elementTextHeight = elementTextBoundingRect.height;
      const valueScrollY = window.pageYOffset || window.scrollY;

      this.elementTextBottom = elementTextTop + valueScrollY + elementTextHeight;
      this.callbackUpdateProgress();
    };
    this.callbackUpdateProgress = function () {
      const valueScrollY = window.pageYOffset || window.scrollY;
      const elementProgressBarWidth = (valueScrollY / (this.elementTextBottom - window.innerHeight)) * 100;

      this.elementProgressBar.style.width = elementProgressBarWidth <= 100
        ? elementProgressBarWidth.toString() + '%'
        : '100%';
    };
    // Initialize
    if (this.elementText !== null) {
      window.addEventListener('resize', _.throttle(this.callbackUpdateTextHeight, throttleTimeout, true));
      window.addEventListener('scroll', _.throttle(this.callbackUpdateProgress, throttleTimeout, true));
      this.callbackUpdateTextHeight();
    }
  };
  // Initialize modules
  moduleProgressBar('[data-content-post]', '[data-the-progress-bar]', 200);
})();
