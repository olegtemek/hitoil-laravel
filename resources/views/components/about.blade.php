<section class="about">
  <div class="container">
    <div class="about__wrapper">
      <div class="about__left">
        <h2 class="title">О компании</h2>
        <p>Компания <span class="ex-bold">HIT.KZ</span> реализует широкий ассортимент горюче-смазочных материалов различного предназначения и предлагает клиентам привлекательные условия сотрудничества</p>

          <a href="{{route('front.page', 'contacts')}}" class="b-btn">Подробнее</a>
      </div>

      <div class="about__right" data-fancybox href="{{ Vite::asset('resources/assets/about.mp4') }}">
        <img src="{{ Vite::asset('resources/assets/about.png') }}" alt="О компании видео">
      </div>
    </div>
  </div>
</section>