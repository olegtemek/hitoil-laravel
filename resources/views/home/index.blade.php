@extends('layouts.main')


@section('content')
    @include('components.intro', ['intro'=>$data['page']])

    @include('components.about')
    @include('components.certificates', ['certificates'=>$data['certificates']])

    @include('components.reviews', ['reviews'=>$data['reviews']])

    @include('components.partners', ['partners'=>$data['partners']])
@endsection