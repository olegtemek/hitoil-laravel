<div class="cart__items">
  @if($items->count() >0)
  @foreach ($items as $product)
      <div class="cart__items-item">
        <span class="delete">&#9587;</span>
        <input type="hidden" value="{{$product->id}}" value="{{$product->id}}" class="id">
        <a class="img-block" href="{{$product->attributes->url}}">
          <img src="/{{$product->attributes->image}}" alt="{{$product->title}}">
        </a>
        <a href="{{$product->attributes->url}}">
          <h4>{{$product->name}} </h4>
        </a>
        <div class="product__text-price-qty">
          <button class="minus">-</button>
          <input type="text" readonly class="qty" value="{{$product->quantity}}">
          <button class="plus">+</button>
        </div>
        <p class="price"><span>{{$product->getPriceSum()}}</span> ТГ</p>
      </div>
  @endforeach
  @else
  <p>Корзина пустая..</p>
  @endif
</div>
<div class="cart__form">
  <h2>Ваш заказ</h2>

  <div class="cart__form-row">
    <div>
      <span>Итого:</span>
      <p>{{$items->count()}} товара</p>
    </div>
    <p>{{\Cart::getTotal()}} ТГ</p>
  </div>

  <div class="cart__form-item">
    <input type="text" name="name_cart" placeholder="Имя">
  </div>
  <div class="cart__form-item">
    <input type="text" name="number_cart" class="number-input" placeholder="Телефон">
  </div>
  <div class="cart__form-item">
    <div class="form-group">
      <input type="checkbox" name="checkbox_cart" id="checkbox" checked>
      <label for="checkbox"><p>Даю согласие на сбор и обработку <br> моих данных</p></label>
    </div>
  </div>

  <button class="btn-c send-cart">Отправить заявку</button>
</div>
<div class="cart__rec">
  @include('components.recommended', ['items'=>$data['recom']])
</div>