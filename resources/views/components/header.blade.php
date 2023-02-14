<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <div class="header__left">
        <div class="header__logo">
          <a href="/">
            <img src="{{ Vite::asset('resources/assets/logo.png') }}" alt="{{env('APP_NAME')}}">
          </a>
        </div>
        <ul class="header__nav">
          <span>&#9587;</span>
          <li>
            <a class="active" href="#">ГСМ</a>
          </li>
          <li>
            <a href="#">Масла</a>
          </li>
          <li>
            <a href="#">О нас</a>
          </li>
          <li>
            <a href="#">Акции</a>
          </li>
          <li>
            <a href="#">Расчет доставки</a>
          </li>
          <li>
            <a href="#">Контакты</a>
          </li>
        </ul>
      </div>
      <div class="header__right">
        <a href="#" class="header__right-number">
          +7 777 544 37 75
        </a>
        <a href="#" class="header__right-whatsapp">
          <svg class="icon">
            <use xlink:href="#whatsapp"></use>
          </svg>
        </a>

        <button class="b-btn modal-btn">
          Оставить заявку
        </button>
      </div>

      <button class="header__burger">
        <svg class="icon">
          <use xlink:href="#menu"></use>
        </svg>
      </button>
    </div>
  </div>
</header>