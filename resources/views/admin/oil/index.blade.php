@extends('admin.main')


@section('title')
Все масло
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.oil.create') }}" class="btn btn-success">Добавить масло</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все масло</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Цена</th>
                <th>Кол-во</th>
                <th>Фотография</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($oils as $oil)
            <tr>
              
              <td>{{$oil->title}}</td>
              <td>{{$oil->price}}</td>
              <td>{{$oil->volume}}</td>
              <td><img src="/{{$oil->image}}" style="max-width: 150px" alt=""></td>
              <td>{{$oil->factory->title}}</td>
              <td>
                <a href="{{route('admin.oil.edit', $oil->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.oil.destroy', $oil->id)}}" method="post">
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