@extends('admin.main')


@section('title')
Все сертификаты
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.petrol.create') }}" class="btn btn-success">Добавить топливо</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все заводы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Завод</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($petrols as $petrol)
            <tr>
              
              <td>{{$petrol->title}}</td>
              <td>{{$petrol->parent->title}}</td>
              
              <td>
                <a href="{{route('admin.petrol.edit', $petrol->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.petrol.destroy', $petrol->id)}}" method="post">
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