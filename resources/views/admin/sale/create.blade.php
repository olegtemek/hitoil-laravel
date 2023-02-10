@extends('admin.main')


@section('title')
Добавить акцию
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.sale.store') }}">
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
              <label>Краткое описание</label>
              @error('mini_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('mini_description') }}" class="form-control" name="mini_description" placeholder="Краткое описание">
            </div>
          </div>



          <div class="col-sm-4">
            <div class="form-group">
              @error('mini')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография баннера</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="col-sm-4">
            <div class="form-group">
              @error('mini_image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография в карточке</label>
                <input type="text" class="form-control" id="mini_image" name="mini_image" value="{{ old('mini_image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="mini_image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div> --}}

          <div class="col-sm-12">
            <div class="form-group">
              <label>Описание</label>
              @error('description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="description" style="min-height: 200px" class="form-control"></textarea>
            </div>
          </div>


        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить акцию</button>
      </div>    
    </div>
  </form>
</div>

@endsection