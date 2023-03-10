@extends('admin.main')


@section('title')
Редактировать товар
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.product.update', $product->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Название товара</label>
              @error('title')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $product->title }}" class="form-control" name="title" placeholder="Название товара">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Цена (если пустой "Цену уточняйте")</label>
              @error('price')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $product->price }}" class="form-control" name="price" placeholder="Цена">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Основа</label>
              @error('base')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $product->base }}" class="form-control" name="base" placeholder="Основа">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Модель</label>
              @error('model')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $product->model }}" class="form-control" name="model" placeholder="Модель">
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Категория</label>
              @error('category_id')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <select name="category_id" class="form-control">
                @foreach ($categories as $category)
                    <option @if($product->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Описание</label>
              @error('description')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <textarea name="description" class="form-control" style="min-height:150px;">{{$product->description}}</textarea>
            </div>
          </div>



          <h4 class="mt-4 col-sm-12">Фильтры</h4>
          <div class="col-sm-12 row  mb-4">
            
            <div class="col-sm-3">
              <div class="form-group">
                <label>Бренд</label>
                @error('brand')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="brand" class="form-control">
                  @foreach ($brands as $filter)
                  <option @if($product->brand_id == $filter->id) selected @endif value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label>Объем</label>
                @error('volume')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="volume" class="form-control">
                  @foreach ($volumes as $filter)
                  <option @if($product->volume_id == $filter->id) selected @endif value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label>Вязкость</label>
                @error('viscosity')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="viscosity" class="form-control">
                  @foreach ($viscosities as $filter)
                  <option @if($product->viscosity_id == $filter->id) selected @endif value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                <label>Тип</label>
                @error('type')
                <span class="error text-danger">{{ $message }}</span>
                @enderror
                <select name="type" class="form-control">
                  @foreach ($types as $filter)
                  <option @if($product->type_id == $filter->id) selected @endif value="{{$filter->id}}">{{$filter->title}}</option>
                @endforeach
                </select>
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label>Популярный</label>
                
                  <input class="form-control" type="checkbox" name="popular" 
                  @if ($product->popular)
                          checked
                      @endif
                      >
  
              </div>
            </div>
          </div>

          <input type="hidden" value="{{$product->images ?? ''}}" id="result_image" name="images">
          <h4 class="mt-4 col-sm-12">Изображения <button class="btn btn-success add">Добавить изображение</button></h4>
          <div class="col-sm-12 row  mb-4">
          

            <div class="images col-sm-12">
              @if (!empty($product->images))
              @foreach (json_decode($product->images) as $key=> $item)
              <div class="image{{$key}}">
                <div class="images-left">
            
                  <div class="input-group col-sm-6">
                    <label style="display: block; width:100%">Выберите изображение</label>
                    <input type="text" class="form-control input-image" id="image{{$key}}" name="image{{$key}}" value="{{$item}}">
                    <div class="input-group-prepend">
                      <a href="" class="popup_selector btn btn-success" data-inputid="image{{$key}}"><i class="fas fa-file"></i></a>
                      <button class="remove btn btn-warning" data-id="image{{$key}}">Remove</button>
                    </div>
                  </div>
                  
                 </div>
                 <div class="images-right col-sm-6"></div>
                </div>
           @endforeach
           @else
           
              @endif

            </div>

           
          </div>
          
      
        </div>

      </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Редактировать товар</button>
      </div>    
    </div>
  </form>
</div>

@endsection


@section('js')
<script>
  const btn = document.querySelector('.add')
  let inputs = document.querySelectorAll('.input-image')
  function addImage(index = 0){
    const block = document.querySelector('.images')

    let parent = document.createElement('div')
    parent.classList.add(`image${index}`)

    let left = document.createElement('div')
    left.classList.add('col-sm-6')
    left.classList.add('images-left')

    let right = document.createElement('div')
    right.classList.add('col-sm-6')
    right.classList.add('images-right')
    


    left.innerHTML = `
    
      <div class="input-group">
        <label style="display: block; width:100%">Выберите изображение</label>
        <input type="text" class="form-control input-image" id="image${index}" name="image${index}">
        <div class="input-group-prepend">
          <a href="" class="popup_selector btn btn-success" data-inputid="image${index}"><i class="fas fa-file"></i></a>
          <button class="remove btn btn-warning" data-id="image${index}">Remove</button>
        </div>
      </div>
              
    `

    parent.append(left)

    block.append(parent)
    



    removeImage()
  }

  function removeImage(){
    let removes = document.querySelectorAll('.remove')

      removes.forEach(btn=>{
        btn.addEventListener('click', (e)=>{
        e.preventDefault();

        let id = e.target.dataset.id
        let block = document.querySelector(`.${id}`)
        
        block.remove()

        let all = document.querySelectorAll('.images>div')
        let array = [];
        all.forEach(elem => {
            let path = elem.querySelector('input').value

            array.push(path)
        });


        document.getElementById('result_image').value = JSON.stringify(array)
      })


      
    })
  }

  removeImage()

  btn.addEventListener('click', e=>{
    e.preventDefault();
    let tmpImages = document.querySelectorAll('.input-image');

    addImage(tmpImages.length)

    document.querySelectorAll('.images>div').forEach((block,index) => {
      block.className = `image${index}`;
    });
  })
</script>
@endsection