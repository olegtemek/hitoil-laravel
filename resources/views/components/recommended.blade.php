<section class="recommended">
  <h2 style="max-width:100%" class="title">Рекомендуемые товары</h2>
    <div class="recommended__wrapper">
      
      <div class="recommended__slider-outter">
        <div class="swiper recommended__slider">
          <div class="swiper-wrapper">
            @foreach ($items as $item)
               <a href="{{route('front.product.index', $item->slug)}}" class="swiper-slide">
                <img src="/{{json_decode($item->images)[0]}}" alt="{{$item->title}}">
                <h3>{{$item->title}}</h3>
                <p>{{$item->price}} ТГ</p>
                <span>Подробнее</span>
               </a>
            @endforeach
          </div>
        </div>
        <div class="recommended-button-prev slider-btn button-prev">
        </div>
        <div class="recommended-button-next slider-btn button-next">
        </div>
      </div>
    </div>
</section>