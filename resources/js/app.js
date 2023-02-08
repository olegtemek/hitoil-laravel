import.meta.glob([
  '../assets/**',
  '../fonts/**',
]);





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