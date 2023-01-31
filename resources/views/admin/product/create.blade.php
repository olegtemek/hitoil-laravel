@extends('admin.main')


@section('title')
Создать товар
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.product.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Название товара</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('title') }}" class="form-control" name="title" placeholder="Название товара">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Цена (если пустой "Цену уточняйте")</label>
              @error('price')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('price') }}" class="form-control" name="price" placeholder="Цена">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Основа</label>
              @error('base')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('base') }}" class="form-control" name="base" placeholder="Основа">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Модель</label>
              @error('model')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('model') }}" class="form-control" name="model" placeholder="Модель">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Категория</label>
              @error('category_id')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
              </select>
            </div>
          </div>



          <h4 class="mt-4 col-sm-12">Фильтры</h4>
          <div class="col-sm-12 row  mb-4">
            
            <div class="col-sm-3">
              <div class="form-group">
                <label>Бренд</label>
                @error('brand')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="brand" class="form-control">
                  @foreach ($brands as $filter)
                  <option value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label>Объем</label>
                @error('volume')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="volume" class="form-control">
                  @foreach ($volumes as $filter)
                  <option value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label>Вязкость</label>
                @error('viscosity')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="viscosity" class="form-control">
                  @foreach ($viscosities as $filter)
                  <option value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>Тип</label>
                @error('type')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="type" class="form-control">
                  @foreach ($types as $filter)
                  <option value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>
          </div>

      
        </div>

      </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить товар</button>
      </div>    
    </div>
  </form>
</div>

@endsection