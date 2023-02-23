@extends('layouts.main')


@section('content')

  <div class="cart">
    <div class="container">
      <div class="cart__top">
        <div class="cart__top-top">
          <p class="active"> <span>1</span> Корзина</p>
          <p> <span>2</span> Оформление</p>
          <p> <span>3</span> Заказ принят</p>
        </div>
        <div class="cart__top-bottom">
          <h2 class="title">Корзина</h2>

          <a href="{{route('front.cart.clear')}}" class="cart-clear">Очистить корзину</a>
        </div>
      </div>
      <div class="cart__wrapper">
        @include('product.cart-info', ['items'=>$data['items']])
      </div>
    </div>
  </div>

@endsection