@extends('admin.main')


@section('title')
Все фильтры по {{$title}}
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.filter.create', $type) }}" class="btn btn-success">Добавить фильтр</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все фильтры по {{$title}}</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Значение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($filters as $filter)
            <tr>
              
              <td>{{$filter->title}}</td>
              <td>{{$filter->value}}</td>
              
              <td>
                <a href="{{route('admin.filter.edit', ['id'=>$filter->id,'type'=>$type])}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.filter.destroy', ['type'=>$type ,'id'=>$filter->id])}}" method="post">
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