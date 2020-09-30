'use strict';

let value = 6;

const update = () => {
  const counterElm = document.querySelector('#counter');
  counterElm.textContent = value;
  const knobElm = document.querySelector('#knob');
  knobElm.style.width = `${value * 10}%`;
};

const btnPlus = document.querySelector('#plus');
btnPlus.addEventListener('click', () => {
  if (value < 10) {
    value += 1;
  }

  update();
});

const btnMinus = document.querySelector('#minus');
btnMinus.addEventListener('click', () => {
  if (value > 0) {
    value -= 1;
  }

  update();
});

update();
