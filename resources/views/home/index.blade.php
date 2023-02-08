@extends('layouts.main')


@section('content')
    @include('components.intro', ['intro'=>$data['page']])
@endsection