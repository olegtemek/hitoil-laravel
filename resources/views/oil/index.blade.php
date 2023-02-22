@extends('layouts.main')


@section('content')

    @include('components.intro', ['intro'=>$data['page'], 'analog'=>true, 'btn'=>'Оставить заявку'])

    @include('components.categories', ['categories'=>$data['categories']])

    @include('components.recom')

    

    @include('components.form-analog', ['title'=>'Подобрать<br>смазочные материалы'])
    @include('components.special', ['bg'=>'none'])
@endsection