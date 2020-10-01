'use strict';

const starElms = document.querySelectorAll('.rating__star');

starElms[0].addEventListener('click', () => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = '1';
  starElms[0].classList.add('rating__star--on');
  starElms[1].classList.remove('rating__star--on');
  starElms[2].classList.remove('rating__star--on');
  starElms[3].classList.remove('rating__star--on');
  starElms[4].classList.remove('rating__star--on');
});

starElms[1].addEventListener('click', () => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = '2';
  starElms[0].classList.add('rating__star--on');
  starElms[1].classList.add('rating__star--on');
  starElms[2].classList.remove('rating__star--on');
  starElms[3].classList.remove('rating__star--on');
  starElms[4].classList.remove('rating__star--on');
});

starElms[2].addEventListener('click', () => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = '3';
  starElms[0].classList.add('rating__star--on');
  starElms[1].classList.add('rating__star--on');
  starElms[2].classList.add('rating__star--on');
  starElms[3].classList.remove('rating__star--on');
  starElms[4].classList.remove('rating__star--on');
});

starElms[3].addEventListener('click', () => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = '4';
  starElms[0].classList.add('rating__star--on');
  starElms[1].classList.add('rating__star--on');
  starElms[2].classList.add('rating__star--on');
  starElms[3].classList.add('rating__star--on');
  starElms[4].classList.remove('rating__star--on');
});

starElms[4].addEventListener('click', () => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = '5';
  starElms[0].classList.add('rating__star--on');
  starElms[1].classList.add('rating__star--on');
  starElms[2].classList.add('rating__star--on');
  starElms[3].classList.add('rating__star--on');
  starElms[4].classList.add('rating__star--on');
});
