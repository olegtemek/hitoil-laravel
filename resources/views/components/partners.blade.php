<section class="partners">
  <div class="container">
    <h2 class="title">Наши партнеры</h2>
    <div class="partners__wrapper">
      <div class="swiper partners__slider">
        <div class="swiper-wrapper">
          @foreach ($partners as $partner)
              <div class="swiper-slide">
                <div class="swiper-slide-left">
                  <img src="/{{$partner->image}}" alt="{{$partner->title}}">
                </div>
                <div class="swiper-slide-right">
                  <h3 class="ex-bold">{{$partner->title}}</h3>
                  <p>{{$partner->description}}</p>
                  <a rel="nofollow" href="{{$partner->link}}" target="_blank" class="b-btn">Подробнее</a>
                </div>
              </div>
          @endforeach
          
        </div>
        
      </div>
      <div class="partners-button-prev slider-btn button-prev">
      </div>
      <div class="partners-button-next slider-btn button-next">
      </div>
    </div>
  </div>
</section>