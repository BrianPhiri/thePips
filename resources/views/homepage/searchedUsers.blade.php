@foreach($searched as $products)
      <a href="/products/{{ $products->id}}">{{$products->name}}</a>
    <br>
@endforeach
