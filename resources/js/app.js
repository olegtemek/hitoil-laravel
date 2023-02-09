import.meta.glob([
  '/resources/assets/**',
  '/resources/fonts/**',
]);




import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox.css";

if (document.querySelector('.header__burger')) {
  let btn = document.querySelector('.header__burger')
  let menu = document.querySelector('.header__nav')
  btn.addEventListener('click', () => {
    menu.classList.toggle('active')
    document.addEventListener('click', clickMenu)
  })

  function clickMenu(e) {
    if (e.target.tagName != 'use' && e.target.tagName != 'svg' && e.target.classList[0] != 'header__nav') {
      menu.classList.remove('active')
      document.removeEventListener('click', clickMenu)
    }
  }
}







//SLiders 

import Swiper, { Navigation, Autoplay } from 'swiper';
import 'swiper/swiper-bundle.css';
import 'swiper/css/navigation';

const partnersSlider = new Swiper('.partners__slider', {
  modules: [Navigation, Autoplay],
  centeredSlides: true,
  autoplay: {
    delay: 2500
  },
  navigation: {
    nextEl: '.partners-button-next',
    prevEl: '.partners-button-prev',
  }
});

const certificatesSlider = new Swiper('.certificates__slider', {
  modules: [Navigation, Autoplay],
  centeredSlides: true,
  autoplay: {
    delay: 2500
  },
  navigation: {
    nextEl: '.certificates-button-next',
    prevEl: '.certificates-button-prev',
  }
});


const reviewsSlider = new Swiper('.reviews__slider', {
  modules: [Navigation, Autoplay],
  centeredSlides: true,
  // autoplay: {
  //   delay: 2500
  // },
  navigation: {
    nextEl: '.reviews-button-next',
    prevEl: '.reviews-button-prev',
  }
});

