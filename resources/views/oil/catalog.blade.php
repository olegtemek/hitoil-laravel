@extends('layouts.main')


@section('content')

@include('components.breadcrums', ['pages'=>[[route('front.catalog.index', $data['page']->slug), $data['page']->title]],'product'=>true])


<section class="catalog">
  <div class="container">
    <h2 class="title" style="max-width:100%">{{$data['page']->title}}</h2>


    <div class="catalog__wrapper">

      @if($data['filters']['brands']->count() >= 1 && $data['filters']['types']->count() >= 1 && $data['filters']['volumes']->count() >= 1 && $data['filters']['viscosities']->count() >= 1)
      <div class="catalog__left">
        <h4>Фильтр</h4>
        <span class="cross">&#9587;</span>
        @if($data['filters']['types']->count() >= 1)
        <div class="catalog__left-list">
          <div class="catalog__left-list-top">
            <h5>ТИПЫ</h5>
            @if ($data['filters']['types']->count() > 5)
            <span class="show-all">Показать все</span>    
          @endif
          </div>

          <div class="catalog__left-list-bottom">

            @foreach ($data['filters']['types'] as $item)
                <div class="catalog__left-list-bottom-item
                @if(isset(request()->type))
                  @foreach (explode(',',request()->type) as $filter )
                      {{$filter == $item->id ? 'active' : ''}}
                  @endforeach
                @endif
                " data-filter="type" data-id="{{$item->id}}">{{$item->title}}</div>
            @endforeach
          </div>
        </div>
        @endif

        @if($data['filters']['brands']->count() >= 1)
        <div class="catalog__left-list">
          <div class="catalog__left-list-top">
            <h5>Бренды</h5>
            @if ($data['filters']['brands']->count() > 5)
              <span class="show-all">Показать все</span>    
            @endif
          </div>

          <div class="catalog__left-list-bottom">
            @foreach ($data['filters']['brands'] as $item)
                <div class="catalog__left-list-bottom-item
                @if(isset(request()->brand))
                  @foreach (explode(',',request()->brand) as $filter )
                      {{$filter == $item->id ? 'active' : ''}}
                  @endforeach
                @endif
                " data-filter="brand" data-id="{{$item->id}}">{{$item->title}}</div>
            @endforeach
          </div>
        </div>
        @endif

        @if($data['filters']['viscosities']->count() >= 1)
        <div class="catalog__left-list">
          <div class="catalog__left-list-top">
            <h5>Вязкость</h5>
            @if ($data['filters']['viscosities']->count() > 5)
              <span class="show-all">Показать все</span>    
            @endif
          </div>

          <div class="catalog__left-list-bottom">
            @foreach ($data['filters']['viscosities'] as $item)
                <div class="catalog__left-list-bottom-item
                @if(isset(request()->viscosity))
                  @foreach (explode(',',request()->viscosity) as $filter )
                      {{$filter == $item->id ? 'active' : ''}}
                  @endforeach
                @endif
                " data-filter="viscosity" data-id="{{$item->id}}">{{$item->title}}</div>
            @endforeach
          </div>
        </div>
        @endif
        @if($data['filters']['volumes']->count() >= 1)
        <div class="catalog__left-list">
          <div class="catalog__left-list-top">
            <h5>Объем</h5>
            
            @if ($data['filters']['volumes']->count() > 5)
              <span class="show-all">Показать все</span>    
            @endif
            
          </div>

          <div class="catalog__left-list-bottom">
            @foreach ($data['filters']['volumes'] as $item)
                <div class="catalog__left-list-bottom-item
                @if(isset(request()->volume))
                  @foreach (explode(',',request()->volume) as $filter )
                      {{$filter == $item->id ? 'active' : ''}}
                  @endforeach
                @endif
                " data-filter="volume" data-id="{{$item->id}}">{{$item->title}}</div>
            @endforeach
          </div>
        </div>
        @endif

        <button class="b-btn filtered">Применить</button>
        <span class="filter-clear">Очистить все</span>
      </div>
      @endif

      <div class="catalog__right">

        <div class="catalog__right-top">
          <p>Сортировать:</p>
          <div class="catalog__right-top-buttons">
            <button class="filtered other-filter 
              @if(isset(request()->popular))
                  active
              @endif
            " data-filter="popular">Популярное</button>
          <button class="filtered other-filter 
          @if(isset(request()->last))
          active
      @endif
          " data-filter="last">Новинки</button>
          <button id="open_filter">
            Фильтры
          </button>
          </div>
        </div>

        <div class="catalog__right-bottom">
          @if($data['products']->count() >0)
            @foreach ($data['products'] as $item)
                <a href="{{route('front.product.index', $item->slug)}}" class="catalog__right-bottom-item">
                  <img src="/{{json_decode($item->images)[0]}}" alt="{{$item->title}} Изображение">
                  <h3>{{$item->title}}</h3>
                  @if ($item->price > 0)
                      <p>{{$item->price}} ТГ</p>

                  @else

                    <span>Узнать цену</span>
                  @endif
                </a>
            @endforeach

          @else

          <p style="grid-column: span 2;">Товара нет в наличии..</p>
          @endif
        </div>
        {{ $data['products']->appends(request()->except('page'))->links('vendor.pagination.custom') }}
      </div>
    </div>
  </div>
</section>
    


@endsection