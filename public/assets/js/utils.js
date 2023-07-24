const UPButton = document.querySelector('#upbtn');
const MenuButton = document.querySelector('#menubtn');
const MenuCloseButton = document.querySelector('#menux');
const Nav = document.querySelector('nav');
const log_actionBtn = document.getElementById("log_action");
const account = document.getElementById("account");
const next = document.getElementById("next");
const prev = document.getElementById("prev");

UPButton.addEventListener('click', topFunction);
MenuButton.addEventListener('click', hammenu);
MenuCloseButton.addEventListener('click', dishammenu);
window.addEventListener('scroll', toggleUpButton);
window.addEventListener('scroll', toggleArrow);

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

function hammenu() {
    MenuButton.style.display = 'none';
    MenuCloseButton.style.display = 'block';
    Nav.style.display = "flex";
    UPButton.style.display = 'none';

}

function dishammenu() {
    MenuButton.style.display = 'block';
    MenuCloseButton.style.display = 'none';
    Nav.style.display = "none";
    UPButton.style.display = 'block';
}

function toggleUpButton() {
    if (document.body.scrollTop > 55 || document.documentElement.scrollTop > 55) {
        UPButton.style.display = "block";
    } else {
        UPButton.style.display = "none";
    }
}