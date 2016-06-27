@extends('layouts.master')
@section('content')
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="single-sec">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{URL::asset('/')}}">Home</a></li>
			<li class="active">Products</li>
		</ol>
		<!-- start content -->
		<div class="col-md-9 det">
			<div class="single_left">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						<li>
							<img class="etalage_source_image img-responsive" src="{{ URL::asset('image_uploads')}}/{{$product->image}}" style="width: 300px; height: 400px" />
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="single-right">
				<h3>{{ $product->name }}</h3>
				<div class="id"><h4>ID: {{ $product->id }}</h4></div>
				<form action="" class="sky-form">
					<fieldset>
						<section>
							<div class="rating">
								<input type="radio" name="stars-rating" id="stars-rating-5">
								<label for="stars-rating-5"><i class="icon-star"></i></label>
								<input type="radio" name="stars-rating" id="stars-rating-4">
								<label for="stars-rating-4"><i class="icon-star"></i></label>
								<input type="radio" name="stars-rating" id="stars-rating-3">
								<label for="stars-rating-3"><i class="icon-star"></i></label>
								<input type="radio" name="stars-rating" id="stars-rating-2">
								<label for="stars-rating-2"><i class="icon-star"></i></label>
								<input type="radio" name="stars-rating" id="stars-rating-1">
								<label for="stars-rating-1"><i class="icon-star"></i></label>
								<div class="clearfix"></div>
							</div>
						</section>
					</fieldset>
				</form>
				<div class="cost">
					<div class="prdt-cost">
						<ul>
							<li>Selling Price:</li>
							<li class="active">Ksh {{number_format($product->price)}}</li>
							<!-- Start -->
							<form  method="POST" action="{{ url('/addItems') }}">
								<input type="hidden" name="product_id" value="{{$product->id}}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="btn btn-fefault add-to-cart">
									<i class="fa fa-shopping-cart"></i>
									Add to cart
								</button>
							</form>
							<!-- End -->
							<!-- <a href="{{ URL::asset('addItem')}}/{{$product->id}}">BUY NOW</a> -->
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="single-bottom1">
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="sofaset-info">
				<h4>Product Summary {{ $product->name }}</h4>
				<ul>
					<p>
						{{ $product->description }}
					</p>
				</ul>
			</div>
		</div>
		<div class="rsidebar span_1_of_left">
@include('homepage._sidebar')
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@include('homepage._footer')
@endsection
