@extends('admin.main')


@section('title')
Редактировать сотрудника
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.team.update', $team->id) }}">
    @csrf
    @method("PUT")
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>ФИО</label>
              @error('name')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $team->name }}" class="form-control" name="name" placeholder="ФИО">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Должность</label>
              @error('pos')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $team->pos }}" class="form-control" name="pos" placeholder="Должность">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $team->image }}">
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
        <button class="btn btn-success" type="submit">Редактировать сотрудника</button>
      </div>    
    </div>
  </form>
</div>

@endsection