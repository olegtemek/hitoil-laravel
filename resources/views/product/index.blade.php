@extends('layouts.main')


@section('content')
@include('components.breadcrums', ['pages'=>[[route('front.catalog.index', $data['page']->parent->slug), $data['page']->parent->title],[route('front.product.index', $data['page']->slug), $data['page']->title]],'product'=>true])

<div class="product">
  <div class="container">
    <h2 class="title product-title" style="max-width:100%">{{$data['page']->title}}</h2>
    <div class="product__wrapper">
      <div class="product__images">
        
        <div class="swiper product__images-second">
          <div class="swiper-wrapper">      
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
          </div>
        </div>
        <div thumbsSlider="" class="swiper product__images-main">
          <div class="swiper-wrapper">
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
            @foreach (json_decode($data['page']->images) as $item)
            <div class="swiper-slide">
              <img src="/{{$item}}"  alt="Image"/>
            </div>
            @endforeach
          </div>
        </div>




      </div>

      <input type="hidden" value="{{$data['page']->id}}" class="product-id">
      <div class="product__text">
        <div class="product__text-price">
          <span class="product-price price"><span>{{$data['page']->price}}</span> ????</span>
          <div class="product__text-price-qty">
            <button class="minus">-</button>
            <input type="text" readonly class="product-qty" value="1">
            <button class="plus">+</button>
          </div>
          <button class="btn-c product-addcart">????????????????</button>
        </div>

        <div class="modal-btn">
          <span class="svg"><svg class="icon">
            <use xlink:href="#question"></use>
          </svg></span>

          <p>???????????? ???????????? ?? ????????????</p>
        </div>

        <div class="product__text-stat">
          <h2>??????????????????????????????</h2>

          <div class="product__text-stat-item">
            <p>??????????????????????????</p><span>{{$data['page']->brand->value}}</span>
          </div>
          @if ($data['page']->model)
          <div class="product__text-stat-item">
            <p>????????????</p> <span>{{$data['page']->model}}</span>
          </div>
          @endif
          <div class="product__text-stat-item">
            <p>?????? ??????????  <span class="svg"> <span class="tooltiptext">?????? ?????????????????????????? ?????????? - ?????? ???????? ?????????????????????????? ??????????: 
              ?????? ?????????????????? ?????? ??????????????????????</span> <svg class="icon">
              <use xlink:href="#question"></use>
            </svg></span></p>
            <span>{{$data['page']->type->value}}</span>
          </div>
          @if ($data['page']->base)
          <div class="product__text-stat-item">
            <p>????????????  <span class="svg"><span class="tooltiptext">?????? ?????????????? ??????????????????, ???????????????????? ???? ?????????????????????? ????????????????</span><svg class="icon">
              <use xlink:href="#question"></use>
            </svg></span></p><span>{{$data['page']->base}}</span>
          </div>    
          @endif
          
          <div class="product__text-stat-item">
            <p>????????????????  <span class="svg"><span class="tooltiptext">?????? ???????? ?????? ?????????????????????????? ??????????????</span><svg class="icon">
              <use xlink:href="#question"></use>
            </svg></span></p><span>{{$data['page']->viscosity->value}}</span>
          </div>
          <div class="product__text-stat-item">
            <p>?????????? (??????????)</p><span>{{$data['page']->volume->value}}</span>
          </div>

        </div>

        @if($data['page']->description)
        <div class="product__text-description">
          <h2>????????????????</h2>
          <input type="hidden" class="product-link" value="{{route('front.product.index', $data['page']->slug)}}">
          <p>{{$data['page']->description}}</p>
        </div>
        @endif
      </div>
      <div class="product__other">
        @include('components.recommended', ['items'=>$data['recom']])
      </div>
    </div>
  </div>
</div>
@endsection