@extends('layouts.main')


@section('content')
    @include('components.intro', ['intro'=>$data['page']])


    @include('components.oilSpec')
    @include('components.about')
    @include('components.certificates', ['certificates'=>$data['certificates']])


    @include('components.special')
    @include('components.reviews', ['reviews'=>$data['reviews']])

    @include('components.partners', ['partners'=>$data['partners']])
@endsection