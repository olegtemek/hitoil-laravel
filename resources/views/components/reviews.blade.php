<section class="reviews">
  <div class="container">
    <div class="reviews__wrapper">
      <h2 class="title">Отзывы</h2>
      <div class="reviews__slider-outter">
        <div class="swiper reviews__slider">
          <div class="swiper-wrapper">
            @foreach ($reviews as $rev)
               <div class="swiper-slide">
                <div class="swiper-slide-left">
                  <img src="/{{$rev->image}}" alt="{{$rev->title}}">
                  <button class="b-btn" data-fancybox href="/{{$rev->image_full}}">СМОТРЕТЬ ОТЗЫВ</button>
                </div>

                <div class="swiper-slide-right">
                  <h4 class="ex-bold">Задача</h4>
                  <p>{{$rev->task}}</p>

                  <h4 class="ex-bold">Результат</h4>
                  <p>{{$rev->result}}</p>
                </div>
               </div>
            @endforeach
          </div>
        </div>
        <div class="reviews-button-prev slider-btn button-prev">
        </div>
        <div class="reviews-button-next slider-btn button-next">
        </div>
      </div>
    </div>
  </div>
</section>