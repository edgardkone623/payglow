/*
  Inspired by: "how to: create touch id logo"
  By: Anton Kudin
  Link: https://dribbble.com/shots/1288075-how-to-create-touch-id-logo
*/

let body = document.querySelector('body');
let fingerprint = document.querySelector('.fingerprint');
let center = document.querySelector('.center');
let scan = document.querySelector('.scan');
let timer, timerSuccess;

function onSuccess() {
  body.removeEventListener('mousedown', onTouchStart);
  body.removeEventListener('touchstart', onTouchStart);

  fingerprint.classList.remove('active');
  center.classList.add('success');

  clearTimeout(timerSuccess);

  timerSuccess = setTimeout(() => {
    body.addEventListener('mousedown', onTouchStart);
    body.addEventListener('touchstart', onTouchStart);

    center.classList.remove('success');
  }, 3000);
  document.location.replace('./card.php');
}

function onTouchStart() {
  fingerprint.classList.add('active');
  timer = setTimeout(onSuccess, 2000);
}

function onTouchEnd() {
  fingerprint.classList.remove('active');
  clearTimeout(timer);
}

body.addEventListener('mousedown', onTouchStart);
body.addEventListener('touchstart', onTouchStart);
body.addEventListener('mouseup', onTouchEnd);
body.addEventListener('touchend', onTouchEnd);