@extends('admin.main')


@section('title')
Редактировать сертификат
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.certificate.update', $cert->id) }}">
    @csrf
    @method("PUT")
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Заголовок</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $cert->title }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Описание</label>
              @error('description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $cert->description }}" class="form-control" name="description" placeholder="Описание">
            </div>
          </div>
          
          

          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $cert->image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Редактировать сертификат</button>
      </div>    
    </div>
  </form>
</div>

@endsection