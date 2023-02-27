<section class="petrol">
  <div class="container">
    <div class="petrol__wrapper">
      <div class="petrol__top">
        <select id="select_type">
          <option value="0">Бензин</option>
          <option value="1">Диз топливо</option>
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