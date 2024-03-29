(() => {
  'use strict';
  // isPage conditional
  const isPoemArchive = document.querySelector('.main--index-poem') !== null;
  const isPoemSingle = document.querySelector('.main--single-poem') !== null;
  // Poem More Info Counter
  const poemMoreInfoCounterName = 'poem-more-info';
  const poemMoreInfoCounterMax = 3;
  const poemMoreInfoCounter = window.localStorage.getItem('poem-more-info') || '0';
  const poemMoreInfoCounterInt = parseInt(poemMoreInfoCounter);
  // Poem More Info Element
  const poemMoreInfoSelector = '.poem-first-time';
  const poemMoreInfoClassActive = 'poem-first-time--active';

  if ((isPoemArchive === true || isPoemSingle === true) && poemMoreInfoCounter < poemMoreInfoCounterMax) {
    // Calculate new PoemMoreInfoCounter value
    let poemMoreInfoCounterNewValue = isPoemArchive === true ? poemMoreInfoCounterMax : poemMoreInfoCounterInt + 1;
    // Show Poem More Info Element
    if (isPoemSingle === true && poemMoreInfoCounterInt < poemMoreInfoCounterMax) {
      let poemMoreInfoElement = document.querySelector(poemMoreInfoSelector);
      poemMoreInfoElement.classList.add(poemMoreInfoClassActive);
    }
    // Set LocalStorage
    window.localStorage.setItem(poemMoreInfoCounterName, poemMoreInfoCounterNewValue);
  }
})();