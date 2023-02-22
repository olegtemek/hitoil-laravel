@extends('layouts.main')

@section('head')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
@endsection

@section('content')
    @include('components.breadcrums', ['pages'=>[['/cost', 'Расчет доставки']]])

    <section class="cost">
      <div class="container">
        <h1 class="title">{{$data['page']->title}}</h1>
        <div class="cost__wrapper">

          <div class="cost__select">
            <p>Выберите завод: </p>
            <select id="factory_select">
              @foreach ($data['factories'] as $factory)
                  <option value="{{$factory->map}} // {{$factory->title}}">{{$factory->title}}</option>
              @endforeach
            </select>
          </div>

          <div class="cost__select">
            <p>Выберите город доставки: </p>
             <select id="city_select">
              
            </select>
          </div>

          <div class="cost__map" id="map">

          </div>

          <div class="cost__select">
            <p>Выберите объем: </p>
            <input type="number" placeholder="100 т" id="volume">
          </div>

          <div class="cost__select">
            <p>Выберите продукцию: </p>
            <select id="product_select">
              <option value="Топливо">Топливо</option>
              <option value="Диз. топливо">Диз. топливо</option>
              <option value="Масла">Масла</option>
            </select>
          </div>

          <div class="cost__btn">
            <button class="btn-c send_resullt">Узнать стоимость доставки</button>
          </div>
        </div>
      </div>
    </section>
@endsection

@section('js')
    <script>
      const cities = ['Абай',
                'Акколь',
                'Аксай',
                'Аксу',
                'Актау',
                'Актобе',
                'Алга',
                'Алматы',
                'Алтай',
                'Арал',
                'Аркалык',
                'Арыс',
                'Астана',
                'Атбасар',
                'Атырау',
                'Аягоз',
                'Байконыр',
                'Балхаш',
                'Булаево',
                'Державинск',
                'Ерейментау',
                'Есик',
                'Есиль',
                'Жанаозен',
                'Жанатас',
                'Жаркент',
                'Жезказган',
                'Жем',
                'Жетысай',
                'Житикара',
                'Зайсан',
                'Казалинск',
                'Кандыагаш',
                'Караганды',
                'Каражал',
                'Каратау',
                'Каркаралинск',
                'Каскелен',
                'Кентау',
                'Кокшетау',
                'Конаев',
                'Костанай',
                'Косшы',
                'Кулсары',
                'Курчатов',
                'Кызылорда',
                'Ленгер',
                'Лисаковск',
                'Макинск',
                'Мамлютка',
                'Павлодар',
                'Петропавловск',
                'Приозёрск',
                'Риддер',
                'Рудный',
                'Сарань',
                'Сарканд',
                'Сарыагаш',
                'Сатпаев',
                'Семей',
                'Сергеевка',
                'Серебрянск',
                'Степногорск',
                'Степняк',
                'Тайынша',
                'Талгар',
                'Талдыкорган',
                'Тараз',
                'Текели',
                'Темир',
                'Темиртау',
                'Тобыл',
                'Туркестан',
                'Уральск',
                'Усть-Каменогорск',
                'Ушарал',
                'Уштобе',
                'Форт-Шевченко',
                'Хромтау',
                'Шалкар',
                'Шар',
                'Шардара',
                'Шахтинск',
                'Шемонаиха',
                'Шу',
                'Шымкент',
                'Щучинск',
                'Экибастуз',
                'Эмба']

      const selectCity = document.getElementById('city_select');

      cities.forEach(item => {
        let option = document.createElement('option')
        option.value = item
        option.innerText = item
        selectCity.append(option)
      });

    $(document).ready(function () {
      $('#city_select').selectize({
          sortField: 'text'
      });
      $('#factory_select').selectize({
          sortField: 'text',
      });
      $('#product_select').selectize({
          sortField: 'text',
      });

      let map = $('#factory_select option:selected').val().split(' // ')
      $('#map').html(map[0])

      $('#factory_select').change(()=>{
        let map = $('#factory_select option:selected').val().split(' // ')
        
            $('#map').html(map[0])
      })
      
    
    
  });



  $('.send_resullt').on('click', ()=>{
    const modal = document.querySelector('.modal')

    modal.classList.add('active')

    document.addEventListener('click', (event) => {
      if (event.target.classList[1] == 'active' || event.target.tagName == 'SPAN') {
        modal.classList.remove('active')
      }
    });

  })
    </script>


@endsection