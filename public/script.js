const BURGER = document.querySelector(".header__nav--burgerMenu");
const MENU = document.querySelector(".navBar__ul");
const CLOSED_BURGER = document.querySelector(".header__nav__div");
const Burger_Div = document.querySelectorAll("header__nav--burgerMenu__div");
BURGER.addEventListener('click', rotate);

function rotate(Event){
    Event.preventDefault();
    MENU.classList.toggle("navBar__ul--display");
}


// Generation random de la page poem :
const CARDS = document.querySelectorAll(".section__img");
for (let card of CARDS){
    card.addEventListener("click", randomPoem);
}

function randomPoem(){
    let valueCard = this.getAttribute("alt");
    let cookie = document.cookie=`theme=${valueCard}; path=/; samesite=Lax`;
    document.location.href=`poems.php`;
}
