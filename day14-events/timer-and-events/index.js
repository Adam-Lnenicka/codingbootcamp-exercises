'use strict';

let counter = 0;

const timerID = setInterval(() => {
  counter += 1;
  const timerElm = document.querySelector('#time');
  timerElm.textContent = 'Time: ' + counter;
}, 1000);

const stop = (event) => {
  clearInterval(timerID);
  const timerElm = document.querySelector('#time');
  timerElm.textContent = 'Time stopped at: ' + counter;
  event.target.textContent = 'start';
};

const stopBtn = document.querySelector('#stop-btn');
stopBtn.addEventListener('click', stop);

document.addEventListener('keyup', (event) => {
  if (event.code === 'Space' && event.ctrlKey) {
    counter = 0;
    const timerElm = document.querySelector('#time');
    timerElm.textContent = 'Time: ' + counter;
  }
});
