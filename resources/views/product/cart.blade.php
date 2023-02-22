@extends('layouts.main')


@section('content')

  <div class="cart">
    <div class="container">
      <div class="cart__top">
        <div class="cart__top-top">
          <p> <span>1</span> Корзина</p>
          <p> <span>2</span> Оформление</p>
          <p> <span>3</span> Заказ принят</p>
        </div>
        <div class="cart__top-bottom">
          <h2 class="title">Корзина</h2>

          <button class="cart-clear">Очистить корзину</button>
        </div>
      </div>
      <div class="cart__wrapper">
        <div class="cart__items">
          @foreach ($data['items'] as $product)
              <div class="cart__items-item">
                <span class="delete">&#9587;</span>
                <img src="/{{$product->attributes->image}}" alt="{{$product->title}}">
                <h4>{{$product->name}}</h4>
                <div class="product__text-price-qty">
                  <button class="minus">-</button>
                  <input type="text" readonly class="product-qty" value="1">
                  <button class="plus">+</button>
                </div>
                <p>{{$product->price}} ТГ</p>
              </div>
          @endforeach
        </div>
        <div class="cart__form">
          form
        </div>
        <div class="cart__rec">
          recommend
        </div>
      </div>
    </div>
  </div>

@endsection