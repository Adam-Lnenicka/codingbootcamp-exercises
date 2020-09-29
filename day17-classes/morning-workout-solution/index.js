'use strict';

const chatElm = document.getElementById('chat');
conversation.forEach((msg) => {
  chatElm.innerHTML += `
    <div class="message message--${msg.side}">
      <img class="message__head" src="img/${msg.name.toLowerCase()}.png" />
      <div class="message__text">${msg.text}</div>
    </div>
  `;
});
