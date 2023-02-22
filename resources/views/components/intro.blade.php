<section class="intro @if(isset($analog))
analog
@endif" style="background-image: url('/{{$intro->image}}')">
  <div class="container">
    <div class="intro__wrapper
    @if(isset($analog))
      analog
    @endif
    ">
      <div class="intro__block">
        <h1 class="ex-bold">{{$intro->title}}</h1>
        @if(!empty($intro->description))
        <p>{{$intro->description}}</p>
        @endif
      <button class="btn modal-btn">

        @if (isset($btn))
            {{$btn}}
        @else
        Связаться
        @endif

        <svg class="icon">
          <use xlink:href="#arrow-single"></use>
        </svg>
      </button>
      </div>
    </div>
  </div>
</section>