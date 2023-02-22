@extends('layouts.main')


@section('content')
@include('components.breadcrums', ['pages'=>[[route('front.catalog.index', $data['page']->parent->slug), $data['page']->parent->title],[route('front.product.index', $data['page']->slug), $data['page']->title]]])

<div class="product">
  <div class="container">
    <h2 class="title" style="max-width:100%">{{$data['page']->title}}</h2>
    <div class="product__wrapper">
      <div class="product__images">
        images
      </div>

      
      <div class="product__text">
        <div class="product__text-price">
          <span>{{$data['page']->price}} ТГ</span>
          <div class="product__text-price-qty">
            <button class="minus">-</button>
            <input type="text" value="1">
            <button class="plus">+</button>
          </div>
          <button class="btn-c">Заказать</button>
        </div>

        <p class="modal-btn">
          <svg class="icon">
            <use xlink:href="#question"></use>
          </svg>
          Задать вопрос о товаре
        </p>

        <div class="product__text-stat">
          <h2>Харакктеристики</h2>

          <div class="product__text-stat-item">
            <p>Производитель <span>{{$data['page']->brand->value}}</span></p>
          </div>
          <div class="product__text-stat-item">
            <p>Модель <span>{{$data['page']->model}}</span></p>
          </div>
          <div class="product__text-stat-item">
            <p>Тип масла <span>{{$data['page']->type->value}}</span></p>
          </div>
          <div class="product__text-stat-item">
            <p>Основа <span>{{$data['page']->base}}</span></p>
          </div>
          <div class="product__text-stat-item">
            <p>Вязкость <span>{{$data['page']->viscosity->value}}</span></p>
          </div>
          <div class="product__text-stat-item">
            <p>Объем (литры) <span>{{$data['page']->volume->value}} л</span></p>
          </div>

        </div>

        @if($data['page']->description)
        <div class="product__text-description">
          <h2>Описание</h2>

          <p>{{$data['page']->description}}</p>
        </div>
        @endif
      </div>
      <div class="product__other">
        recomend
      </div>
    </div>
  </div>
</div>
@endsection