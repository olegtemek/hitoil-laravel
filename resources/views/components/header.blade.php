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
            <a href="/">ГСМ</a>
          </li>
          <li>
            <a href="#">Масла</a>
          </li>
          <li>
            <a href="#">О нас</a>
          </li>
          <li>
            <a href="{{route('front.page', 'sale')}}">Акции</a>
          </li>
          <li>
            <a href="#">Расчет доставки</a>
          </li>
          <li>
            <a href="{{route('front.page', 'contacts')}}">Контакты</a>
          </li>
        </ul>
      </div>
      <div class="header__right">
        <a href="tel:{{$global_data['settings']->number}}" class="header__right-number">
          {{$global_data['settings']->number}}
        </a>
        <a href="https://wa.me/{{str_replace(' ','', $global_data['settings']->number_whatsapp)}}?text=Здравствуйте" target="_blank" class="header__right-whatsapp">
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