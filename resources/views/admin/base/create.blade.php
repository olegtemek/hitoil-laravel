@extends('admin.main')


@section('title')
Создать тип
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.base.store') }}">
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

        </div>


        </div>


      </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить тип</button>
      </div>    
    </div>
  </form>
</div>

@endsection