import.meta.glob([
  '/resources/assets/**',
  '/resources/fonts/**',
]);
import axios from 'axios'

import customSelect from 'custom-select';


[].forEach.call(document.querySelectorAll('.number-input'), function (input) {
  let keyCode;
  function mask(event) {
    event.keyCode && (keyCode = event.keyCode);
    let pos = this.selectionStart;
    if (pos < 3) event.preventDefault();
    let matrix = "+7 (___) ___-__-__",
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = this.value.replace(/\D/g, ""),
      newValue = matrix.replace(/[_\d]/g, function (a) {
        return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
      });
    i = newValue.indexOf("_");
    if (i != -1) {
      i < 5 && (i = 3);
      newValue = newValue.slice(0, i);
    }
    let reg = matrix.substr(0, this.value.length).replace(/_+/g,
      function (a) {
        return "\\d{1," + a.length + "}";
      }).replace(/[+()]/g, "\\$&");
    reg = new RegExp("^" + reg + "$");
    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
    if (event.type == "blur" && this.value.length < 5) this.value = "";
  }

  input.addEventListener("input", mask, false);
  input.addEventListener("focus", mask, false);
  input.addEventListener("blur", mask, false);
  input.addEventListener("keydown", mask, false);
});




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





const selectType = customSelect('#select_type')[0];
const selectFactory = customSelect('#select_factory')[0]


selectType.select.addEventListener('change', getOil);

selectFactory.select.addEventListener('change', getOil);


async function getOil() {
  let oil = {
    type: selectType.value,
    factoryId: selectFactory.value
  }

  let res = await axios.post('/get-oil', {
    oil: oil
  })

  document.querySelector('.petrol__table-row-inner').innerHTML = res.data


}