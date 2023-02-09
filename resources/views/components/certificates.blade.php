<section class="certificates">
  <div class="container">
    <div class="certificates__wrapper">
     <div class="certificates__left">
      <div class="swiper certificates__slider">
        <div class="swiper-wrapper">
          @foreach ($certificates as $cert)
              <a class="swiper-slide" data-fancybox href="/{{$cert->image}}" title="{{$cert->description}}">
                <img src="/{{$cert->image}}" alt="{{$cert->title}}">
                <h5 class="ex-bold">{{$cert->title}}</h5>
              </a>
          @endforeach
        </div>
      </div>
      <div class="certificates-button-prev slider-btn button-prev">
      </div>
      <div class="certificates-button-next slider-btn button-next">
      </div>
     </div>


     <div class="certificates__right">
      <h4 class="title">Наши гарантии сертификаты, медали</h4>
     </div>
    </div>
  </div>
</section>





