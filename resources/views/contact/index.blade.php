@extends('layouts.main')


@section('content')
    @include('components.breadcrums', ['pages'=>[['/contacts', 'Контакты']]])

    <section class="contacts">
      <div class="container">
        <h1 class="title">{{$data['page']->title}}</h1>
        <div class="contacts__wrapper">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A09b23329be79b80ea2909553ec2c446b3604e800ee24252bb573e25af8d6ce0a&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
         <div class="contacts__block">
          <div class="contacts__block-left">
            <h2>Офис</h2>
            <div>
              <div class="svg marker">
                <svg class="icon">
                  <use xlink:href="#marker"></use>
                </svg>
              </div>
              <p>{{$data['contact']->address}}</p>
            </div>
            <div>
              <div class="svg timer">
                <svg class="icon">
                  <use xlink:href="#time"></use>
                </svg>
              </div>
              <p>{!! $data['contact']->time !!}</p>
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