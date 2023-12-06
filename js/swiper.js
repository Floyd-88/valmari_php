// import Swiper from "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs";

let swiper = new Swiper(".swiper", {
  // direction: 'vertical', // вертикальная прокрутка
  slidesPerView: 3, // показывать по 3 превью
  spaceBetween: 54, // расстояние между слайдами
  loop: true,

  // If we need pagination
  pagination: {
    el: ".pagination",
    clickable: true,
    width: 15,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".slider__next",
    prevEl: ".slider__back",
  },
});

let swiper_2 = new Swiper(".swiper_2", {
  // direction: 'vertical', // вертикальная прокрутка
  slidesPerView: 2, // показывать по 3 превью
  spaceBetween: 150, // расстояние между слайдами
  loop: true,

  // If we need pagination
  pagination: {
    el: ".pagination",
    clickable: true,
    width: 15,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".slider__next",
    prevEl: ".slider__back",
  },
});

let swiper_3 = new Swiper(".swiper_3", {
  // direction: 'vertical', // вертикальная прокрутка
  slidesPerView: 3, // показывать по 3 превью
  spaceBetween: 30, // расстояние между слайдами
  loop: true,

  // If we need pagination
  pagination: {
    el: ".pagination",
    clickable: true,
    width: 15,
  },

  // Navigation arrows
  navigation: {
    nextEl: ".slider__next",
    prevEl: ".slider__back",
  },
});

let swiper_4 = new Swiper(".swiper_4", { 
  loop: true,                         //loop
  slidesPerView: 3,                   //number of slides to show
  centeredSlides : true,              //put acctive slide center
  spaceBetween: 60,
  observer: true,
  observeParents: true,
  loopedSlides: 3,

  // If we need pagination
  pagination: {
    el: ".pagination",
    clickable: true,
    width: 15,
  },

});
