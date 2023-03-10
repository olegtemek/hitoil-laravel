@extends('admin.main')


@section('title')
Все отзывы
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.review.create') }}" class="btn btn-success">Добавить отзыв</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все заводы</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Задача</th>
                <th>Результат</th>
                
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($reviews as $review)
            <tr>
              
              <td>{{$review->task}}</td>
              <td>{{$review->result}}</td>
              <td>
                <a href="{{route('admin.review.edit', $review->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.review.destroy', $review->id)}}" method="post">
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