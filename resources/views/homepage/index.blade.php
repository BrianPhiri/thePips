@extends('layouts.master')
@section('content')
<!-- header -->
@include('homepage._navbar')
<!-- partial comes here -->
<!---->
<div class="content">
	<div class="container">
		<div class="slider">
			<ul class="rslides" id="slider1">
				@foreach($products as $product)
				<li><img src="image_uploads/{{$product->image}}" style="width:1140px; height:544.38px; " alt=""/></li>
				@endforeach
				<!-- <li><img src="images/banner2.jpg" alt=""></li>
				<li><img src="images/banner3.jpg" alt=""></li> -->
			</ul>
		</div>
	</div>
</div>
<!---->
<div class="bottom_content">
	<div class="container">
		<div class="sofas">
			<div class="col-md-6 sofa-grid">
				<img src="images/t1.jpg" alt=""/>
				<h3>IMPORTED DINING SETS</h3>
				<h4><a href="special/other">SPECIAL ACCENTS OFFER</a></h4>
			</div>
			<div class="col-md-6 sofa-grid sofs">
				<img src="images/t2.jpg" alt=""/>
				<h3>MADE BY THEPIPS</h3>
				<h4><a href="special/thepips">FABFURNISHING MELA</a></h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--Specially Designed Furnish Section-->
<div class="new">
	<div class="container">
		<h3>specially designed for Furnyish</h3>
		<div class="new-products">
			<div class="new-items">
				<div class="item1">
					<a href="products/{{$prd1->id}}"><img src="image_uploads/{{$prd1->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info">
						<h4><a href="products/{{$prd1->id}}">{{ $prd1->name }}</a></h4>
						<span>ID: {{$prd1->id}}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd1->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>
				</div>
				<div class="item4">
					<a href="products/{{$prd2->id}}"><img src="image_uploads/{{$prd2->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info4">
						<h4><a href="products/{{$prd2->id}}">{{ $prd2->name }}</a></h4>
						<span>ID: {{ $prd2->id }}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd2->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>
				</div>
			</div>
			<div class="new-items new_middle">
				<div class="item2">
					<a href="products/{{$prd3->id}}"><img src="image_uploads/{{$prd3->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info2">
						<h4><a href="products/{{$prd3->id}}">{{ $prd3->name }}</a></h4>
						<span>ID: {{ $prd3->id }}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd3->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>

				</div>
				<div class="item5">
					<a href="products/{{$prd4->id}}"><img src="image_uploads/{{$prd4->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info5">
						<h4><a href="products/{{$prd4->id}}">{{ $prd4->name }}</a></h4>
						<span>ID: {{ $prd4->id }}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd4->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>
				</div>
			</div>
			<div class="new-items new_last">
				<div class="item3">
					<a href="products/{{$prd5->id}}"><img src="image_uploads/{{$prd5->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info3">
						<h4><a href="products/{{$prd5->id}}">{{ $prd5->name }}</a></h4>
						<span>ID: {{ $prd5->id }}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd5->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>
				</div>
				<div class="item6">
					<a href="products/{{$prd6->id}}"><img src="image_uploads/{{$prd6->image}}" alt="" style=" width="346.8px"; height="227.17px" " /></a>
					<div class="item-info6">
						<h4><a href="products/{{$prd6->id}}">{{ $prd6->name }}</a></h4>
						<span>ID: {{ $prd6->id }}</span>
						<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$prd6->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--New Products-->
<div class="top-sellers">
	<div class="container">
		<h3>New to the Family</h3>
		<div class="seller-grids">
			@foreach($newProducts as $product)
			<div class="col-md-3 seller-grid">
				<a href="products/{{ $product->id}}"><img src="image_uploads/{{$product->image}}" style="width:255px; height:140.59px; " alt=""/></a>
				<h4><a href="products/{{ $product->id}}">{{$product->name}}</a></h4>
				<span>Kshs {{number_format($product->price)}}</span>
				<p>{{ substr($product->description,0,80).'...'}}</p>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--Recommendations-->
<div class="recommendation">
	<div class="container">
		<div class="recmnd-head">
			<h3>MOST POPULAR</h3>
		</div>
		<div class="bikes-grids">
			<ul id="flexiselDemo1">
				@foreach($top as $tp)
					@foreach($tp->products()->get() as $product)
					<li>
						<a href="products/{{ $product->id}}"><img src="image_uploads/{{$product->image}}" style="width:176.23px; height:100px; " alt=""/></a>
						<h4><a href="products/{{ $product->id}}">{{$product->name}}</a></h4>
						<p>Kshs {{number_format($product->price)}}</p>
					</li>
					@endforeach
				@endforeach
			</ul>
			<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: {
						portrait: {
							changePoint:480,
							visibleItems: 1
						},
						landscape: {
							changePoint:640,
							visibleItems: 2
						},
						tablet: {
							changePoint:768,
							visibleItems: 3
						}
					}
				});
			});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		</div>
	</div>
</div>
@include('homepage._footer')
@endsection
