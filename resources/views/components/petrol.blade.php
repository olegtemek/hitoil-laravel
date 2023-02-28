<section class="petrol">
  <div class="container">
    <div class="petrol__wrapper">
      <div class="petrol__top">
        <select id="select_type">
          <option value="0">Бензин автомобильный</option>
          <option value="1">Дизельное топливо</option>
          <option value="2">Для реактивных двигателей</option>
          <option value="3">Мазут топочный</option>
          <option value="4">Топливо печное бытовое</option>
          <option value="5">Битум нефтяной дорожный</option>
        </select>

        <select id="select_factory">
          @foreach ($data['factories'] as $factory)
              <option value="{{$factory->id}}">{{$factory->title}}</option>
          @endforeach
        </select>
      </div>
      <div class="petrol__table">
        <div class="petrol__table-row">
          <div><h3>Продукция</h3></div>
          <div><h3>Цена за тонну (тг)</h3></div>
          <div><h3>Доступно</h3></div>
          <div><h3>Паспорт</h3></div>
        </div>

        <div class="petrol__table-row-inner">
          @foreach ($petrols as $item)
            @include('components.petrol-row', ['item'=>$item])
        @endforeach
        </div>
        
      </div>
    </div>
  </div>
</section>