@extends('admin.main')


@section('title')
Все акции
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.sale.create') }}" class="btn btn-success">Добавить акцию</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все акции</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Описание</th>
                <th>Изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($sales as $sale)
            <tr>
              
              <td>{{$sale->title}}</td>
              <td>{{$sale->description}}</td>
              <td><img src="/{{$sale->image}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.sale.edit', $sale->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.sale.destroy', $sale->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection