'use strict';

const starElms = document.querySelectorAll('.rating__star');

const updateRating = (rating) => {
  const valueElm = document.querySelector('.rating__value');
  valueElm.textContent = rating;

  starElms.forEach((elm, idx) => {
    if (idx < rating) {
      elm.classList.add('rating__star--on');
    } else {
      elm.classList.remove('rating__star--on');
    }
  });
};

starElms[0].addEventListener('click', () => {
  updateRating(1);
});

starElms[1].addEventListener('click', () => {
  updateRating(2);
});

starElms[2].addEventListener('click', () => {
  updateRating(3);
});

starElms[3].addEventListener('click', () => {
  updateRating(4);
});

starElms[4].addEventListener('click', () => {
  updateRating(5);
});
