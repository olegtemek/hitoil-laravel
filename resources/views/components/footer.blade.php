<footer class="footer">
<div class="container">
  <div class="footer__top-wrapper">
    <div class="footer__top-column">
      <h3>Топливо</h3>
      <a href="#">Бензин</a>
      <a href="#">Дизельное Топливо</a>
    </div>
    <div class="footer__top-column">
      <h3>Масло</h3>
      <a href="#">Моторное</a>
      <a href="#">Трансмиссионое</a>
      <a href="#">Трансформаторное</a>
    </div>

    <div class="footer__top-column">
      <h3>Доставка</h3>
      <a href="{{route('front.page', 'delivery')}}">Условия доставки</a>
    </div>

    <div class="footer__top-column">
      <h3>Контакты</h3>
      <a href="tel:{{$global_data['settings']->number}}" class="number">{{$global_data['settings']->number}}</a>
      <a href="https://wa.me/{{str_replace(' ','', $global_data['settings']->number_whatsapp)}}?text=Здравствуйте" target="_blank" class="number">{{$global_data['settings']->number_whatsapp}}</a>
      <a href="mailto:{{$global_data['settings']->email}}">E-mail: <span>{{$global_data['settings']->email}}</span></a>
    </div>

    <div class="footer__top-map">
      <img src="{{ Vite::asset('resources/assets/map-hover.jpg') }}" alt="Карта">
    </div>
    
  </div>
  <div class="footer__bottom">
    <div class="footer__bottom-left">
      <a href="/"><img src="{{ Vite::asset('resources/assets/footer-logo.png') }}" alt="HitOil.kz"></a>
      <span>@Hit.kz, 2022</span>

      <div class="footer__bottom-left-svg">
        <a href="#">
          <svg class="icon">
            <use xlink:href="#facebook"></use>
          </svg>
        </a>

        <a href="#">
          <svg class="icon">
            <use xlink:href="#instagram"></use>
          </svg>
        </a>

      </div>
    </div>
    <div class="footer__bottom-right">
      <a href="#">Пользовательское соглашение</a>
      <a href="#">Политика обработки данных</a>
    </div>
  </div>
</div>
</footer>