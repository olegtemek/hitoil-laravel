@extends('admin.main')


@section('title')
Настройки
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.setting.update', $setting->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Номер телефона</label>
              @error('number')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->number }}" class="form-control" name="number" placeholder="Номер телефона">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Номер телефона whatsapp</label>
              @error('number_whatsapp')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->number_whatsapp }}" class="form-control" name="number_whatsapp" placeholder="Номер телефона whatsapp">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Cсылка на instagram</label>
              @error('instagram')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->instagram }}" class="form-control" name="instagram" placeholder="Cсылка на instagram">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Cсылка на facebook</label>
              @error('facebook')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->facebook }}" class="form-control" name="facebook" placeholder="Cсылка на facebook">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Email</label>
              @error('email')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $setting->email }}" class="form-control" name="email" placeholder="Email">
            </div>
          </div>

      </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Сохранить</button>
      </div>    
    </div>
  </form>
</div>

@endsection