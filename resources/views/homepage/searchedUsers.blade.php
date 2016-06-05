@foreach($searched as $products)
      <a href="{{URL::asset('/products')}}/{{ $products->id}}">{{$products->name}}</a>
    <br>
@endforeach
