const nameInput = document.querySelector('input[name="name"]');
const emailInput = document.querySelector('input[name="email"]');
const passwordInput = document.querySelector('input[name="password"]');

const userReq = document.querySelector('#userreq');
const emailReq = document.querySelector('#emailreq');
const passwordReq = document.querySelector('#passwordreq');

function displayMessage(event) {
  let avviso = document.getElementById('avviso');
  let input = event.target;
  message = "";
  switch (input) {
    case nameInput:
      message = "L'username deve essere di una dimensione tra 4 e 60 caratteri";
      break;
    case emailInput:
      message = "La email deve essere in un formato valido";
      break;
    case passwordInput:
      message = "La password deve contenere almeno 8 caratteri, di cui almeno 3 minuscoli, 2 maiuscoli, 2 numeri e 1 carattere speciale";
      break;
  }
  avviso.innerHTML = message;
}

function clearMessage() {
  document.getElementById('avviso').innerHTML = "";
}


nameInput.addEventListener('mouseover', displayMessage);

emailInput.addEventListener('mouseover', displayMessage);

passwordInput.addEventListener('mouseover', displayMessage);

nameInput.addEventListener('mouseout', clearMessage);

emailInput.addEventListener('mouseout', clearMessage);

passwordInput.addEventListener('mouseout', clearMessage);