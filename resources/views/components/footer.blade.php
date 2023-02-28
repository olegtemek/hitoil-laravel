<footer class="footer">
<div class="container">
  <div class="footer__top-wrapper">
    <div class="footer__top-column">
      <h3>Топливо</h3>
      <a href="/">Бензин</a>
      <a href="/">Дизельное Топливо</a>
    </div>
    <div class="footer__top-column">
      <h3>Масло</h3>
      @foreach (\App\Models\Category::all() as $item)
      <a href="{{route('front.catalog.index', $item->slug)}}">{{explode(' ', $item->title)[0]}}</a>
      @endforeach
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

    <div class="footer__top-map" id="map_footer">
      <img src="{{ Vite::asset('resources/assets/map-hover.png') }}" alt="Карта">
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A09b23329be79b80ea2909553ec2c446b3604e800ee24252bb573e25af8d6ce0a&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
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
      <span>|</span>
      <a href="#">Политика обработки данных</a>
    </div>
  </div>
</div>
</footer>