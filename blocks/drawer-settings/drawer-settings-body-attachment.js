(() => {
  // Color schema
  const colorSchema = window.localStorage.getItem('color-schema') || 'auto';
  document.body.setAttribute('data-color-schema', colorSchema);
})();