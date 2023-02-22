<section class="breadcrums">
  <div class="container">
    <div class="breadcrums__wrapper">
      <a href="/">Главная</a>

      @foreach ($pages as $item)
          <a href="{{$item[0]}}">
            {{$item[1]}}
          </a>
      @endforeach
    </div>

    @if (isset($product))
        <a href="{{route('front.cart.index')}}" class="btn-c">Перейти в корзину</a>
    @endif
  </div>
</section>