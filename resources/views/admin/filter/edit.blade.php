@extends('admin.main')


@section('title')
Редактировать фильтр
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.filter.update', ['type'=>$type, 'id'=>$filter->id]) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Название</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $filter->title }}" class="form-control" name="title" placeholder="Название">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Отображение в карточке товара</label>
              @error('value')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $filter->value }}" class="form-control" name="value" placeholder="Значение">
            </div>
          </div>


        </div>




      </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Редактировать фильтр</button>
      </div>    
    </div>
  </form>
</div>

@endsection