<section class="categories">
  <div class="container">
    <h2 class="title">Масла</h2>  
    <div class="categories__wrapper">
      @foreach ($categories as $cat)
          <a href="{{route('front.catalog.index', $cat->slug)}}" class="categories__item">
            <div class="categories__item-img">
              <img src="/{{$cat->image}}" alt="{{$cat->title}}">
            </div>

            <h3>{{$cat->title}}</h3>
          </a>
      @endforeach
    </div>
    <a href="{{route('front.catalog.index', $categories[0]->slug)}}" class="btn-c">Перейти в каталог</a>
  </div>
</section>