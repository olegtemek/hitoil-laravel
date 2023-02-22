<section class="special @if (isset($bg))
white
@endif>" @if (isset($bg))
    style="background-image:none !important;"
@endif>
  <div class="container">
    <h2 class="title">Специальные предложения</h2>
    <div class="special__wrapper">

      @if (isset($bg))
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special-white1.png') }}" alt="Строительные компоненты">
        <h4>Строительные компоненты</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special-white2.png') }}" alt="ДРСУ">
        <h4>ДРСУ</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special-white3.png') }}" alt="Редукторные смазки">
        <h4>Редукторные смазки</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special-white4.png') }}" alt="СОЖ">
        <h4>СОЖ</h4>
      </div>
      @else
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special1.png') }}" alt="Строительные компоненты">
        <h4>Строительные компоненты</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special2.png') }}" alt="ДРСУ">
        <h4>ДРСУ</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special3.png') }}" alt="Редукторные смазки">
        <h4>Редукторные смазки</h4>
      </div>
      <div class="special__item">
        <img src="{{ Vite::asset('resources/assets/special/special4.png') }}" alt="СОЖ">
        <h4>СОЖ</h4>
      </div>
      @endif
      
    </div>
    <a href="#" class="btn">СМОТРЕТЬ ВСЕ</a>
  </div>
</section>