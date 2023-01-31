@extends('admin.main')


@section('title')
Изменить завод {{$page->title}}
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.page.update', $page->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Заголовок в интро</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $page->title }}" class="form-control" name="title" placeholder="Заголовок">
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              <label>Описание в интро</label>
              @error('description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $page->description }}" class="form-control" name="description" placeholder="Заголовок">
            </div>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Изображение в блоке интро</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ $page->image }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>
         


        </div>



        <div class="col-sm-12 row mt-4">
          <h2 class="col-sm-12">Seo (необязательно)</h2>
          <div class="col-sm-4">
            <div class="form-group">
              <label>SEO Заголовок</label>
              @error('seo_title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $page->seo_title}}" class="form-control" name="seo_title" placeholder="SEO Заголовок">
            </div>
          </div>
    
          <div class="col-sm-4">
            <div class="form-group">
              <label>SEO Описание</label>
              @error('seo_description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $page->seo_description}}" class="form-control" name="seo_description" placeholder="SEO Описание">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>SEO текст</label>
              @error('seo_text')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="seo_text" style="min-height:200px;" class="form-control" placeholder="Seo текст">{{$page->seo_text}}</textarea>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>SEO json_ld</label>
              @error('seo_ld')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="seo_ld" style="min-height:200px;" class="form-control" placeholder="Seo текст">{{$page->seo_ld}}</textarea>
            </div>
          </div>
        </div>


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