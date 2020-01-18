(() => {
  'use strict';
  // isPage conditional
  const isPoemArchivePage       = document.querySelector('.post-page--poem-archive') !== null;
  const isPoemSinglePage        = document.querySelector('.post-single--poem') !== null;
  // Poem More Info Counter
  const poemMoreInfoCounterName = 'poem-more-info';
  const poemMoreInfoCounterMax  = 3;
  const poemMoreInfoCounter     = window.localStorage.getItem('poem-more-info') || '0';
  const poemMoreInfoCounterInt  = parseInt(poemMoreInfoCounter);
  // Poem More Info Element
  const poemMoreInfoElementSelector    = '[data-poem-more-info]';
  const poemMoreInfoElementClassActive = 'post-single__poem-more-info--active';

  if ((isPoemArchivePage === true || isPoemSinglePage === true) && poemMoreInfoCounter < poemMoreInfoCounterMax) {
    // Calculate new PoemMoreInfoCounter value
    let poemMoreInfoCounterNewValue = isPoemArchivePage === true ? poemMoreInfoCounterMax : poemMoreInfoCounterInt + 1;
    // Show Poem More Info Element
    if (isPoemSinglePage === true && poemMoreInfoCounterInt < poemMoreInfoCounterMax) {
      let poemMoreInfoElement = document.querySelector(poemMoreInfoElementSelector);
      poemMoreInfoElement.classList.add(poemMoreInfoElementClassActive);
    }
    // Set LocalStorage
    window.localStorage.setItem(poemMoreInfoCounterName, poemMoreInfoCounterNewValue);
  }
})();