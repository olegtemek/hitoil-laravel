<div class="petrol__table-row" data-fancybox href="/{{$item->image}}">
  <div><h4>{{$item->title}}</h4></div>
  <div><h4>{{$item->price}}</h4></div>
  <div><h4>{{$item->volume}}</h4></div>
  <div><h4><img src="{{ Vite::asset('resources/assets/passport.png') }}" alt="Passport {{$item->title}}"></h4></div>
</div>