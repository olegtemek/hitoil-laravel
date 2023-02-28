@extends('admin.main')


@section('title')
Изменить топливо
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.petrol.update', $petrol->id) }}">
    @method('PUT')
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Заголовок</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $petrol->title }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Цена за тонну</label>
              @error('price')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $petrol->price }}" class="form-control" name="price" placeholder="Цена за тонну">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Доступно</label>
              @error('volume')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $petrol->volume }}" class="form-control" name="volume" placeholder="Доступно">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Завод</label>
              @error('factory_id')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <select name="factory_id" class="form-control">
                @foreach ($factories as $factory)
                    <option 
                    @if ($factory->id == $petrol->factory_id)
                        checked
                    @endif
                    value="{{$factory->id}}">{{$factory->title}}</option>
                @endforeach
              </select>
            </div>
          </div>
          
          

          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Паспорт</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $petrol->image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-6">
            <div class="form-group">
              <label for="">Тип Топлива</label>
              @error('type')
              <span class="error text-danger">{{ $message }}</span>
              @enderror

              <select name="type" class="form-control">
                <option @if ($petrol->type == 0)
                    selected
                @endif value="0">Дизельное топливо</option>
                <option @if ($petrol->type == 1)
                  selected
              @endif value="1">Бензин автомобильный</option>
                <option @if ($petrol->type == 2)
                  selected
              @endif value="2">Топливо для реактивных двигателей</option>
                <option @if ($petrol->type == 3)
                  selected
              @endif value="3">Мазут топочный</option>
                <option @if ($petrol->type == 4)
                  selected
              @endif value="4">Топливо печное бытовое</option>
                <option @if ($petrol->type == 5)
                  selected
              @endif value="5">Битум нефтяной дорожный</option>
              </select>
            </div>
          </div>


        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Изменить топливо</button>
      </div>    
    </div>
  </form>
</div>

@endsection