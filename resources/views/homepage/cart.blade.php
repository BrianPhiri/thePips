@extends('layouts.master')
@section('content')
<!-- header -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="cart_main">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{URL::asset('/')}}">Home</a></li>
			<li class="active">Cart</li>
		</ol>
		<!-- START -->
		@if(count($db_content))
<div class="cart-items">
	<h2>My Shopping Bag ({{$db_content->count()}})</h2>
	<script>$(document).ready(function(c) {
		$('.close1').on('click', function(c){
			$('.cart-header').fadeOut('slow', function(c){
				$('.cart-header').remove();
			});
		});
	});
	</script>
	@foreach($db_content as $item)
	<div class="cart-header">
		<div class="close1"> </div>
		<div class="cart-sec">
		<!--  -->
			<div class="cart-item cyc">
				<img src="{{URL::asset('image_uploads')}}/{{$item->products->image}}" style="width: 189.594px; height: 200px;" />
			</div>
			<div class="cart-item-info">
				<h3>{{$item->products->name}}<span>Model No: {{$item->products->id}}</span></h3>
				<h4><span>Ksh </span>{{number_format($item->products->price)}}</h4>
				<p class="qty">Qty ::</p>
				<form class="form-inline">
					<a class="cart_quantity_up" href='{{url("shopcarts?product_id=$item->products_id&increment=1")}}'><i class="fa fa-plus-square" aria-hidden="true"></i></a>
					<input min="1" type="text" id="quantity" name="quantity" value="{{$item->quantity}}" class="form-control input-small">
					<a class="cart_quantity_down" href='{{url("shopcarts?product_id=$item->products_id&decrease=1")}}'><i class="fa fa-minus-square" aria-hidden="true"></i></a>
				</form>
				<br>
				<a class="cpns" href='{{url("shopcarts?product_id=$item->products_id&remove=1")}}'>Remove Item</a>
			</div>
			<div class="clearfix"></div>
			<div class="delivery">
			</div>
		</div>
	</div>
	@endforeach
	@else
	<p>You have no items in the persisted shopping cart</p>
	@endif

	<!-- END -->
		@if(count($content))
		<div class="cart-items">
			<h2>My Shopping Bag ({{Cart::count()}})</h2>
			<script>$(document).ready(function(c) {
				$('.close1').on('click', function(c){
					$('.cart-header').fadeOut('slow', function(c){
						$('.cart-header').remove();
					});
				});
			});
			</script>
			@foreach($content as $item)
			<div class="cart-header">
				<div class="close1"> </div>
				<div class="cart-sec">
					<div class="cart-item cyc">
						<img src="{{URL::asset('image_uploads')}}/{{$item->options->url_path}}"/>
					</div>
					<div class="cart-item-info">
						<h3>{{$item->name}}<span>Model No: {{$item->id}}</span></h3>
						<h4><span>Ksh </span>{{number_format($item->price)}}</h4>
						<p class="qty">Qty ::</p>
						<form class="form-inline">
							<!--  -->
							<input type="hidden" id="productId" value="{{$item->id}}">
							<a href='{{url("carts?product_id=$item->id&increment=1")}}'>Add</a>
							<i class="fa fa-plus-square" aria-hidden="true" onclick="increment()"></i>
							<input min="1" type="text" id="quantity" name="quantity" value="{{$item->qty}}" class="form-control input-small">
							<a href='{{url("carts?product_id=$item->id&decrease=1")}}'><i class="fa fa-minus-square" aria-hidden="true" onclick="decrement()"></i></a>
						</form>
						<br>
						<a class="cpns" href='{{url("carts?product_id=$item->id&remove=1")}}'>Remove Item</a>
					</div>
					<div class="clearfix"></div>
					<div class="delivery">
						<p><h4>Sub-Total:: {{$item->subtotal}}</h4></p>
						<p><h3 id="result"></h3></p>
					</div>
				</div>
			</div>
			@endforeach
			@else
			<p>You have no items in the session shopping cart</p>
			@endif
			<script>$(document).ready(function(c) {
				$('.close2').on('click', function(c){
					$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
				});
			});
			</script>
		</div>

		<div class="cart-total">
			<a class="continue" href="{{ URL::asset('/') }}">Continue to basket</a>
			<div class="price-details">
				<h3>Price Details</h3>
				<span>Total</span>
				<span class="total">Ksh.</span>
				<!-- <span>Delivery Charges</span> -->
				<!-- <span class="total">100.00</span> -->
				<div class="clearfix"></div>
			</div>
			<h4 class="last-price">Total</h4>
			<span id="total" class="total final">{{number_format($total)}}</span>
			<div class="clearfix"></div><br>
			<form action="{{URL::asset('checkout')}}" method="POST">
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<script
			  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			  data-key="pk_test_GIjjWsmv1wDgFvt2BG0Fhtpl"
			  data-amount="{{$total}}"
			  data-name="ThePips"
			  data-description="Buying product"
			  data-image="{{ URL::asset('images/pips.png') }}"
			  data-locale="auto">
			</script>
			</form>
			<!-- <div class="total-item">
				<h3>OPTIONS</h3>
				<h4>COUPONS</h4>
				<a class="cpns" href="#">Apply Coupons</a>
				<p><a href="#">Log In</a> to use accounts - linked coupons</p>
			</div> -->
		</div>
	</div>
</div>
<!---->
<script type="text/javascript">
	$(document).ready(function()
		{
			sub_total = 'The power of javascript';
			$('#sub-total').html(sub_total);
		});
</script>
@include('homepage._footer')
@endsection
