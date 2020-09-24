'use strict';

let result = 0;

const onEquals = () => {
  const inputElm = document.querySelector('.calc__input');
  const value = Number(inputElm.value);
  result += value;

  const resultElm = document.querySelector('.calc__result');
  resultElm.textContent = result;
};
