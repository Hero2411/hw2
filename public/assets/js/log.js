const nameInput = document.querySelector('input[name="name"]');
const emailInput = document.querySelector('input[name="email"]');
const passwordInput = document.querySelector('input[name="password"]');

const userReq = document.querySelector('#userreq');
const emailReq = document.querySelector('#emailreq');
const passwordReq = document.querySelector('#passwordreq');

nameInput.addEventListener('mouseover', () => {
    userReq.style.display = 'block';
  });
  
emailInput.addEventListener('mouseover', () => {
    emailreq.style.display = 'block';
});

passwordInput.addEventListener('mouseover', () => {
    passwordreq.style.display = 'block';
});

nameInput.addEventListener('mouseout', () => {
    userReq.style.display = 'none';
  });
  
  emailInput.addEventListener('mouseout', () => {
    emailReq.style.display = 'none';
  });
  
  passwordInput.addEventListener('mouseout', () => {
    passwordReq.style.display = 'none';
  });