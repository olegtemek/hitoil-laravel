@extends('admin.main')


@section('title')
Добавить завод
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.factory.store') }}">
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
          <div class="col-sm-6"></div>
          <div class="col-sm-4">
            <div class="form-group">
              @error('oil_file')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Каталог масел для этого завода</label>
                <input type="text" class="form-control" id="oil_file" name="oil_file" value="{{ old('oil_file') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="oil_file"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('petrol_file')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Каталог бензина для этого завода</label>
                <input type="text" class="form-control" id="petrol_file" name="petrol_file" value="{{ old('petrol_file') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="petrol_file"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('all_file')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Каталог всех продуктов для этого завода</label>
                <input type="text" class="form-control" id="all_file" name="all_file" value="{{ old('all_file') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="all_file"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить завод</button>
      </div>    
    </div>
  </form>
</div>

@endsection