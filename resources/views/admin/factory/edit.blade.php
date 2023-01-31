@extends('admin.main')


@section('title')
Изменить завод {{$factory->title}}
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.factory.update', $factory->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Заголовок</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $factory->title }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-6"></div>
          



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Изменить завод</button>
      </div>    
    </div>
  </form>
</div>

@endsection