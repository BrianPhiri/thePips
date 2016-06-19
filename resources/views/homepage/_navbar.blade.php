<div class="header_top">
  <div class="container">
   <div class="logo">
    <a href="{{ URL::asset('/')}}"><img src="{{ URL::asset('images/pips.png') }}" alt=""/></a>
  </div>
  <div class="header_right">
    <div class="cart box_1">
     @if(Auth::check())
     <a href="{{ URL::asset('carts')}}">
       <h3>({{$cartdb}} items) <img src="{{URL::asset('images/bag.png')}}" alt=""></h3>
     </a>
     <p><a href="{{url('destroyDbCart')}}" class="simpleCart_empty"><h5>Empty cart</h5></a></p>
     @else
     <a href="{{ URL::asset('carts')}}">
      <h3>Kshs {{Cart::total()}} ({{$cart}} items) <img src="{{URL::asset('images/bag.png')}}" alt=""></h3>
    </a>
    <p><a href="{{url('destroyCart')}}" class="simpleCart_empty"><h5>Empty cart</h5></a></p>
    @endif
    <div class="clearfix"> </div>
  </div>
</div>
<div class="clearfix"></div>
</div>
</div>
<!--cart-->

<!---->
<div class="mega_nav">
  <div class="container" style="padding-left: 10px; font-size: 90%;">
   <div class="menu_sec">
     <!-- start header menu -->
     <ul class="megamenu skyblue">
      <li class="active grid"><a class="color1" href="{{ URL::asset('/')}}">Home</a></li>
      <!--  -->
      @foreach($subsub as $cat)
      <li class="grid"><a class="color2" href="#">{{ $cat->name}}</a>
        <div class="megapanel">
          <div class="row">
            <div class="col1">
              <div class="h_nav">
                <h4>...</h4>
                <ul>
                  @if($cat->category)
                  @foreach($cat->category as $subcat)
                  <li><a href="{{URL::asset('products/category')}}/{{ $subcat->id }}">{{ $subcat->name }}</a></li>
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col2"></div>
            <div class="col1"></div>
            <div class="col1"></div>
            <div class="col1"></div>
          </div>
        </div>
      </li>
      @endforeach
    </ul>
    <div class="search">
      <form>
        {!! csrf_field() !!}
        <input type="text" id="search-input" value="" placeholder="Search..." onkeydown="down()" onkeyup="up()">
        <input type="submit" value="">
        <ul id="search-results">

        </ul>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
</div>
