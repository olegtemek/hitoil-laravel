@extends('layouts.main')


@section('content')
    @include('components.breadcrums', ['pages'=>[['/delivery', 'Условия доставки']]])
    
    <section class="delivery">
      <div class="container">
        <div class="delivery__wrapper">
          <h1 class="title">{{$data['page']->title}}</h1>
          <p>Горюче-смазочные материалы относятся к опасным грузам, поэтому перевозка нефтепродуктов должна осуществляться только специализированным транспортом и с соблюдением всех мер предосторожности. Транспортировка нефтепродуктов – это задача для профессионалов. Наша компания предлагает вам своевременную и безопасную доставку дизельного топлива, бензина, мазута, керосина и других нефтепродуктов непосредственно на производственные площадки.</p>

          <div class="delivery__wrapper-row top">
            <h3>Перевозка осуществляется следующими способами </h3>
            <div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row1.png') }}" alt="delivery truck first">
                <h4>Ж \ Д</h4>
              </div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row2.png') }}" alt="delivery truck second">
                <h4>Бензовоз</h4>
              </div>
            </div>
          </div>
          <p>Мы осуществляем доставку топлива на грузовых автомобилях <span>ГАЗ</span>, <span>ЗИЛ</span>, <span>МАЗ</span>, <span>Камаз</span>, <span>MAN</span>, <span>VOLVO</span>, <span>DAF</span>, <span>SCANIA</span> с общим объемом от <span>5000</span> в рамках одной обалсти и от <span>65000</span> литров при доставке по стране (из одной области в другую). </p>

          <div class="delivery__wrapper-row bottom">
            <h3>Как это работает?</h3>
            <div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row3.png') }}" alt="delivery truck first">
                <h4>Оформление 
                  заявки</h4>
              </div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row4.png') }}" alt="delivery truck second">
                <h4>Согласование
                  договора</h4>
              </div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row5.png') }}" alt="delivery truck second">
                <h4>Подписание
                  договора</h4>
              </div>
              <div>
                <img src="{{ Vite::asset('resources/assets/delivery/row6.png') }}" alt="delivery truck second">
                <h4>Доставка</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('components.form-analog')
@endsection