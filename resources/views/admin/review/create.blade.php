@extends('admin.main')


@section('title')
Добавить отзыв
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.review.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Задача</label>
              @error('task')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('task') }}" class="form-control" name="task" placeholder="Задача">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Результат</label>
              @error('result')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ old('result') }}" class="form-control" name="result" placeholder="Результат">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              @error('image_full')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография отзыва(при нажатии показать отзыв)</label>
                <input type="text" class="form-control" id="image_full" name="image_full" value="{{ old('image_full') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image_full"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
          
          

         



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить отзыв</button>
      </div>    
    </div>
  </form>
</div>

@endsection