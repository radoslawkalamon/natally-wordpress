(() => {
  class ColorSchema {
    constructor(valueName) {
      this.valueName = valueName;
      this.settingsForm = document.querySelector('form[name="website-settings"]');
      this.radios = this.settingsForm.querySelectorAll(`input[name="${this.valueName}"]`);

      this.updateRadios();
      this.setWindowFocusEvent();
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
    
        element.addEventListener('change', () => {
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

    setColorSchema(value) {
      document.body.setAttribute(`data-${this.valueName}`, value);
      window.localStorage.setItem(this.valueName, value);
      this.updateRadios();
    }
  }

  new ColorSchema('color-schema');
})();