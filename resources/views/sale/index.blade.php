@extends('layouts.main')


@section('content')
    @include('components.breadcrums', ['pages'=>[['/sale', 'Акции и Специальные предложения']]])
    <section class="sales">
      <div class="container">
        <h1 class="title">{!!$data['page']->title!!}</h1>
        <div class="sales__wrapper">
          @foreach ($data['sales'] as $item)
          <div class="sales__item">
            <img src="/{{$item->image}}" alt="{{$item->title}}">
            <h2>{!! $item->title !!}</h2>
              <p>{!! $item->description !!}</p>
              <button class="btn modal-btn">Узнать подробнее    <svg class="icon">
                <use xlink:href="#arrow-single"></use>
              </svg></button>
          </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection