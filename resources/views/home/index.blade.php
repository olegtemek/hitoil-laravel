@extends('layouts.main')


@section('content')
    @include('components.intro', ['intro'=>$data['page']])

    @include('components.petrol', ['petrols'=>$data['petrols']])
    @include('components.oilSpec')
    @include('components.about')
    @include('components.certificates', ['certificates'=>$data['certificates']])


    @include('components.special')
    @include('components.reviews', ['reviews'=>$data['reviews']])
    @include('components.form')
    @include('components.partners', ['partners'=>$data['partners']])
@endsection