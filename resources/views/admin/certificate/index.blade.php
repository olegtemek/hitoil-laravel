@extends('admin.main')


@section('title')
Все сертификаты
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.certificate.create') }}" class="btn btn-success">Добавить сертификат</a>
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
                <th>Краткое описание</th>
                <th>Изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($certificates as $certificate)
            <tr>
              
              <td>{{$certificate->title}}</td>
              <td>{{$certificate->mini_description}}</td>
              <td><img src="/{{$certificate->image}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.certificate.edit', $certificate->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.certificate.destroy', $certificate->id)}}" method="post">
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