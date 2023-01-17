@extends('admin.main')


@section('title')
Все сотрудники
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.team.create') }}" class="btn btn-success">Добавить сотрудника</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все заводы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Фио</th>
                <th>Должность</th>
                <th>Изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($teams as $team)
            <tr>
              
              <td>{{$team->name}}</td>
              <td>{{$team->pos}}</td>
              <td><img src="/{{$team->image}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.team.edit', $team->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.team.destroy', $team->id)}}" method="post">
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