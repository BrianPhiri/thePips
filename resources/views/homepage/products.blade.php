@extends('layouts.master')
@section('content')
<!-- header -->
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<!--header//-->
<div class="product-model">
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="{{URL::asset('/')}}">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>OUR PRODUCTS</h2>
		 <div class="col-md-9 product-model-sec">
			 @foreach($subcategories as $product)
					<a href="{{ URL::asset('products')}}/{{ $product->id }}">
	 					<div class="product-grid love-grid">
	 					<div class="more-product"><span> </span></div>
	 					<div class="product-img b-link-stripe b-animate-go  thickbox">
	 						<img src="{{asset('image_uploads')}}/{{$product->image}}" class="img-responsive" alt=""/>
	 						<div class="b-wrapper">
	 						<h4 class="b-animate b-from-left  b-delay03">
	 						<button class="btns"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>Quick View</button>
	 						</h4>
	 						</div>
	 					</div>
					</a>
	 					<div class="product-info simpleCart_shelfItem">
	 						<div class="product-info-cust">
	 							<h4>{{ $product->name}}</h4>
	 							<p>Kes{{ number_format($product->price)}}</p>
	 							<!-- <span class="item_price">$187.95</span> -->
	 							<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$product->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
	 						</div>
	 						<div class="clearfix"> </div>
	 					</div>
	 				</div>
			 @endforeach
			</div>
				<div class="rsidebar span_1_of_left">
						@include('homepage._sidebar')
				</div>
	    </div>
		</div>
</div>
@include('homepage._footer')
@endsection
