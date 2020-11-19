(() => {
  'use strict';
  const _ = {
    throttle: function (n, u, l) { var r = null, i = !0; return function () { var t = function () { n.apply(this, arguments), r = null }; l && i && (i = !1, t()), r || (r = setTimeout(t, u)) } },
  };

  class ProgressBar {
    constructor(textSelector, progressBarSelector, throttleTimeout) {
      this.text = document.querySelector(textSelector);
      this.textBottom = window.innerHeight;
      this.progressBar = document.querySelector(progressBarSelector);

      if (this.text !== null) {
        window.addEventListener('resize', _.throttle(this.updateTextHeight.bind(this), throttleTimeout, true));
        window.addEventListener('scroll', _.throttle(this.updateProgress.bind(this), throttleTimeout, true));
        this.updateTextHeight();
      }
    }

    updateTextHeight() {
      const textBoundingRect = this.text.getBoundingClientRect();
      const textTop = textBoundingRect.top;
      const textHeight = textBoundingRect.height;
      const scrollY = window.pageYOffset || window.scrollY;

      this.textBottom = textTop + scrollY + textHeight;
      this.updateProgress();
    };

    updateProgress() {
      const scrollY = window.pageYOffset || window.scrollY;
      const progressBarWidth = (scrollY / (this.textBottom - window.innerHeight)) * 100;

      this.progressBar.style.width = progressBarWidth <= 100
        ? progressBarWidth.toString() + '%'
        : '100%';
    };
  }
  // Initialize modules
  new ProgressBar('[data-content]', '[data-progress-bar]', 330);
})();
