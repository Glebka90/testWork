let modalWindow = document.querySelector(".dialog");
let openModalButton = (document.querySelector(".open-dialog").onclick = () =>
  modalWindow.showModal());
let closeModelButton = (document.querySelector(".close-dialog").onclick = () =>
  modalWindow.close());


let openModalButtonBurger = (document.querySelector(
  ".burger-open-dialog"
).onclick = () => modalWindow.showModal());

const swiper = new Swiper(".swiper", {
  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  spaceBetween: 20,
});
document.querySelector("#slide-1").addEventListener("click", () => {
  swiper.slideTo(0);
});
document.querySelector("#slide-2").addEventListener("click", () => {
  swiper.slideTo(1);
});
document.querySelector("#slide-3").addEventListener("click", () => {
  swiper.slideTo(2);
});
document.querySelector("#slide-4").addEventListener("click", () => {
  swiper.slideTo(3);
});

//burger menu
let mainMenu = document.querySelector(".burger-menu");
let burgerButton = document.querySelector(".burger-menu__button");
burgerButton.addEventListener("click", () => {
  burgerButton.classList.toggle("active");
  mainMenu.classList.toggle("menu__opacity");
  burgerButton.classList.toggle("burger-menu__button");
});
let firstMenu1 = document.querySelector(".menu__first-lvl-1");
let secondMenu1 = document.querySelector(".duble-menu__list-1");
firstMenu1.addEventListener("click", () => {
  secondMenu1.classList.toggle("duble-menu-1");
});

let firstMenu2 = document.querySelector(".menu__first-lvl-2");
let secondMenu2 = document.querySelector(".duble-menu__list-2");
firstMenu2.addEventListener("click", () => {
  secondMenu2.classList.toggle("duble-menu-2");
});
