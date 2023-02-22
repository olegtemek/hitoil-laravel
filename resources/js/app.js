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




if (document.getElementById('select_type')) {

  console.log('test');
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
}





const modalsBtn = document.querySelectorAll('.modal-btn')
const modal = document.querySelector('.modal')
modalsBtn.forEach(btn => {
  btn.addEventListener('click', () => {
    modal.classList.add('active')

    document.addEventListener('click', (event) => {
      if (event.target.classList[1] == 'active' || event.target.tagName == 'SPAN') {
        modal.classList.remove('active')
      }
    })
  })

});


let alertTimer = null
function initAlert(text, bool) {
  clearTimeout(alertTimer)
  alertTimer = null
  document.querySelector('.alert').classList.add('active')
  document.querySelector('.alert').innerHTML = text
  if (!bool) {
    document.querySelector('.alert').classList.add('error')
  } else {
    document.querySelector('.alert').classList.remove('error')
  }

  alertTimer = setTimeout(() => {
    document.querySelector('.alert').classList.remove('active')
  }, 2000);
}



function validate(name, number, agree = true) {
  if (!name) {
    return initAlert('Поле "Имя" обязательное поле', false)
  }
  if (!number) {
    return initAlert('Поле "Телефон" обязательное поле', false)
  }
  if (!agree) {
    return initAlert('Необходимо согласие на обработку информации', false)
  }

  return true
}

const btnModal = document.querySelector('.send-modal')

btnModal.addEventListener('click', function () {
  let parent = this.parentNode

  let inputs = parent.querySelectorAll('input')
  let name = inputs[0].value
  let number = inputs[1].value

  let result = validate(name, number)
  if (result) {
    sendData({
      name: name,
      number: number
    })
    inputs[0].value = null
    inputs[1].value = null
    modal.classList.remove('active')
  }
})


const btnForm = document.querySelector('.send-form')

if (btnForm) {
  btnForm.addEventListener('click', function () {
    let parent = this.parentNode.parentNode
    let inputs = parent.querySelectorAll('input')
    let name = inputs[0].value
    let number = inputs[1].value
    let agree = inputs[2].checked


    let result = validate(name, number, agree)
    if (result) {
      sendData({
        name: name,
        number: number
      })
      inputs[0].value = null
      inputs[1].value = null
    }
  })
}



async function sendData(data) {



  let dataCost = {}

  if (document.getElementById('factory_select')) {
    dataCost = {
      factory_title: $('#factory_select option:selected').val().split(' // ')[1],
      city_title: $('#city_select option:selected').val(),
      product_title: $('#product_select option:selected').val(),
      volume: $('#volume').val()
    }
  }

  try {
    let res = await axios.post('/send-form', { name: data.name, number: data.number, factory_title: dataCost.factory_title, city_title: dataCost.city_title, product_title: dataCost.product_title, volume: dataCost.volume })

    initAlert('Спасибо за заявку, мы свяжемся в ближайшее время', true)
  } catch (e) {
    return initAlert('Ошибка 500, попробуйте позже')
  }
}



let headerNavs = document.querySelectorAll('.header__nav>li>a');

headerNavs.forEach(link => {
  if (link.href == window.location.href) {
    link.classList.add('active')
  }
});





// FILTERS

if (document.querySelector('.catalog__left-list-bottom-item')) {
  let filtersAll = document.querySelectorAll('.catalog__left-list-bottom-item')

  filtersAll.forEach(checkbox => {
    // listener for add filters link
    checkbox.addEventListener('click', () => {
      checkbox.classList.toggle('active')
    })
  });

  let filterBlocks = document.querySelectorAll('.catalog__left-list-bottom')

  filterBlocks.forEach(block => {


    let child = block.children

    Array.from(child).forEach((filter, index) => {
      if (index > 5) {
        filter.classList.add('hide')
      }
    })

  });


  if (document.querySelector('.show-all')) {
    let showAllBtn = document.querySelectorAll('.show-all')
    showAllBtn.forEach(btn => {
      btn.addEventListener('click', () => {
        let filterBlock = btn.parentNode.parentNode.querySelector('.catalog__left-list-bottom')

        if (filterBlock.querySelector('.hide')) {
          filterBlock.querySelectorAll('.hide').forEach(item => item.classList.remove('hide'))
          btn.innerText = 'Скрыть'
        } else {
          btn.innerText = 'Показать все'
          filterBlock.querySelectorAll('.catalog__left-list-bottom-item').forEach((filter, index) => {
            filter.classList.remove('active')
            if (index > 5) {
              filter.classList.add('hide')
            }
          })
        }
      })
    });
  }




  // others filters

  let otherBtn = document.querySelectorAll('.other-filter')

  otherBtn.forEach(item => {
    item.addEventListener('click', () => {
      item.classList.toggle('active')
    })
  })


  // create link with filters

  let filteredBtn = document.querySelectorAll('.filtered')

  document.querySelector('.filter-clear').addEventListener('click', () => {
    window.location.href = window.location.origin + window.location.pathname
  })

  filteredBtn.forEach(btn => {
    btn.addEventListener('click', () => {

      let filter = {
        type: [],
        viscosity: [],
        volume: [],
        brand: [],
        last: false,
        popular: false
      }


      document.querySelectorAll('.catalog__left-list-bottom-item.active[data-filter="type"]').forEach(item => filter.type.push(item.dataset.id))
      document.querySelectorAll('.catalog__left-list-bottom-item.active[data-filter="viscosity"]').forEach(item => filter.viscosity.push(item.dataset.id))
      document.querySelectorAll('.catalog__left-list-bottom-item.active[data-filter="volume"]').forEach(item => filter.volume.push(item.dataset.id))
      document.querySelectorAll('.catalog__left-list-bottom-item.active[data-filter="brand"]').forEach(item => filter.brand.push(item.dataset.id))
      document.querySelectorAll('.other-filter.active[data-filter="last"]').forEach(i => filter.last = true)
      document.querySelectorAll('.other-filter.active[data-filter="popular"]').forEach(i => filter.popular = true)



      function makeParams(filters) {
        let params = '';


        filters.forEach(array => {

          if (array[0].length > 0) {

            let str = '';

            array[0].forEach(filter => {
              str += filter + ','
            })


            params += array[1] + '=' + str.slice(0, -1) + '&'
          }
        })

        return params;
      }



      let pathname = window.location.pathname;

      let params = makeParams([[filter.type, 'type'], [filter.brand, 'brand'], [filter.viscosity, 'viscosity'], [filter.volume, 'volume']])

      if (filter.last) {
        params += 'last=1&'
      }
      if (filter.popular) {
        params += 'popular=1&'
      }




      if (params == '') {
        window.location.href = window.location.origin + pathname
      } else {
        window.location.href = window.location.origin + pathname + '?' + params.slice(0, -1)
      }

    })
  })



  let openFilters = document.getElementById('open_filter')

  const eventListener = (e) => {
    if (e.target.classList[0] != 'catalog__left-list-bottom-item' && e.target.classList[0] != 'catalog__left-list-bottom' && e.target.classList[0] != 'catalog__left-list') {
      openFilters.click()
    }
  }
  openFilters.addEventListener('click', (e) => {
    e.stopPropagation()
    let filters = document.querySelector('.catalog__left')
    filters.classList.toggle('active')

    if (filters.classList[1]) {
      window.addEventListener('click', eventListener)
    } else {
      removeEventListener('click', eventListener)
    }

  })
}


