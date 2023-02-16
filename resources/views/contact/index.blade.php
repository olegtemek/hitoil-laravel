@extends('layouts.main')


@section('content')
    @include('components.breadcrums', ['pages'=>[['/contacts', 'Контакты']]])

    <section class="contacts">
      <div class="container">
        <h1 class="title">{{$data['page']->title}}</h1>
        <div class="contacts__wrapper">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A93bad589004839f982d2a9e085b22d14915a8a43f4030d529c28594483f153ee&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
         <div class="contacts__block">
          <div class="contacts__block-left">
            <h2>Головной офис</h2>
            <div>
              <div class="svg marker">
                <svg class="icon">
                  <use xlink:href="#marker"></use>
                </svg>
              </div>
              <p>г.Костонай, пр. Аль-Фараби, 65,<br>
                Бизнес-цент, 604 каб.</p>
            </div>
            <div>
              <div class="svg timer">
                <svg class="icon">
                  <use xlink:href="#time"></use>
                </svg>
              </div>
              <p>Ежедневно с <span> 9:00 </span> до <span> 21:00 </span></p>
            </div>
            <div>
              <div class="svg mail">
                <svg class="icon">
                  <use xlink:href="#mail"></use>
                </svg>
              </div>
              <a href="mailto:{{$global_data['settings']->email}}">{{$global_data['settings']->email}}</a>
            </div>
            <div>
              <div class="svg telephone">
                <svg class="icon">
                  <use xlink:href="#telephone"></use>
                </svg>
              </div>
              
              <a href="tel:{{$global_data['settings']->number}}">{{$global_data['settings']->number}}</a>
            </div>
            
          </div>
          <div class="contacts__block-right">
            <img src="{{ Vite::asset('resources/assets/map-inner.jpg') }}" alt="Головной офис картинка">
          </div>
         </div>

        </div>
      </div>
    </section>

    @include('components.form-analog')

@endsection