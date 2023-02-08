<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{$data['page']->seo_title ?? ''}}</title>
  <meta name="description" content="{{$data['page']->seo_description ?? ''}}">
  
  @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>
<body>
  @include('components.header')
  @yield('content')
  <div class="seo">
    <div class="container">
      {!! $data['page']->seo_text ?? '' !!}
    </div>
  </div>
  @include('components.svg')
  @include('components.footer')
</body>
</html>