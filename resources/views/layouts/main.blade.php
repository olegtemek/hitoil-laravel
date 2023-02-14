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
  @if ($data['page']->seo_text)
  <div class="seo">
    <div class="container">
      {!! $data['page']->seo_text ?? '' !!}
    </div>
  </div>    
  @endif
  
  @include('components.svg')
  @include('components.footer')
  @include('components.modal')

  <div class="alert">
    Lorem, ipsum.
  </div>

</body>
</html>