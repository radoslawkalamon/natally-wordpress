(() => {
  class ColorSchema {
    constructor(valueName) {
      this.valueName = valueName;
      this.settingsForm = document.querySelector('form[name="website-settings"]');
      this.radios = this.settingsForm.querySelectorAll(`input[name="${this.valueName}"]`);

      this.addEventListenerToRadios();
      this.updateRadios();
      this.setWindowFocusEvent();
    }

    throttle(func, limit) {
      let lastFunc;
      let lastRan;
      return function() {
        const context = this;
        const args = arguments;
        if (!lastRan) {
          func.apply(context, args);
          lastRan = Date.now();
        } else {
          clearTimeout(lastFunc);
          lastFunc = setTimeout(function() {
            if ((Date.now() - lastRan) >= limit) {
              func.apply(context, args);
              lastRan = Date.now();
            }
          }, limit - (Date.now() - lastRan));
        }
      }
    }

    updateRadios() {
      const colorSchemaActive = this.getColorSchema();
      this.radios.forEach((element) => {
        const elementValue = element.getAttribute('value');
        if (elementValue === colorSchemaActive) {
          element.setAttribute('checked', 'true');
        } else {
          element.removeAttribute('checked');
        }
      });
    }

    addEventListenerToRadios() {
      this.radios.forEach((element) => {
        element.addEventListener('change', () => {
          const elementValue = element.getAttribute('value');
          this.setColorSchema(elementValue);
        });
      });
    }

    setWindowFocusEvent() {
      window.addEventListener('focus', () => {
        const colorSchemaActive = this.getColorSchema();
        this.setColorSchema(colorSchemaActive);
      })
    }

    getColorSchema() {
      return window.localStorage.getItem(this.valueName) || 'auto';
    }

    setColorSchema = this.throttle(function(value) {
      document.body.setAttribute(`data-${this.valueName}`, value);
      window.localStorage.setItem(this.valueName, value);
      this.updateRadios();
    }, 250);
  }

  new ColorSchema('color-schema');
})();