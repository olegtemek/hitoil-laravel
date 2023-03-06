<section class="petrol">
  <div class="container">
    <div class="petrol__wrapper">
      <div class="petrol__top">
        <select id="select_type">
         @foreach ($data['bases'] as $item)
             <option value="{{$item->id}}">{{$item->title}}</option>
         @endforeach
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
            @if($item->base_id == $petrols[0]->base_id)
            @include('components.petrol-row', ['item'=>$item])
            @endif
        @endforeach
        </div>
        
      </div>
    </div>
  </div>
</section>