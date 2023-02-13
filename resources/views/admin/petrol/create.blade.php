@extends('admin.main')


@section('title')
Добавить топливо
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.petrol.store') }}">
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
              <input type="text" value="{{ old('title') }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Цена за тонну</label>
              @error('price')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('price') }}" class="form-control" name="price" placeholder="Цена за тонну">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Доступно</label>
              @error('volume')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('volume') }}" class="form-control" name="volume" placeholder="Доступно">
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
                    <option value="{{$factory->id}}">{{$factory->title}}</option>
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
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-6">
            <div class="form-group">
              <label>Диз топливо?</label>
              @error('type')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
                <input class="form-control" type="checkbox" name="type">

            </div>
          </div>


        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить топливо</button>
      </div>    
    </div>
  </form>
</div>

@endsection