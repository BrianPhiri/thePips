@extends('layouts.master')
@section('content')
<!-- header -->
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="cart_main">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li class="active">Cart</li>
		</ol>
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
						<h4><span>Ksh </span>{{$item->price}}</h4>
						<p class="qty">Qty ::</p>
						<form class="form-inline">
							<!-- <input type="hidden" id="productId" value="{{$item->id}}"> -->
							<a href='{{url("carts?product_id=$item->id&increment=1")}}'><i class="fa fa-plus-square" aria-hidden="true" onclick="increment()"></i></a>
							<input min="1" type="text" id="quantity" name="quantity" value="{{$item->qty}}" class="form-control input-small">
							<a href='{{url("carts?product_id=$item->id&decrease=1")}}'><i class="fa fa-minus-square" aria-hidden="true" onclick="decrement()"></i></a>
						</form>
						<br>
						<a class="cpns" href='{{url("carts?product_id=$item->id&remove=1")}}'>Remove Item</a>
					</div>
					<div class="clearfix"></div>
					<div class="delivery">
						<p><h4>Sub-Total:: {{$item->subtotal}}</h4></p>
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
				<span class="total">Ksh. {{Cart::total()}}</span>
				<span>Discount</span>
				<span class="total">---</span>
				<!-- <span>Delivery Charges</span> -->
				<!-- <span class="total">100.00</span> -->
				<div class="clearfix"></div>
			</div>
			<h4 class="last-price">TOTAL</h4>
			<span class="total final">{{Cart::total()}}</span>
			<div class="clearfix"></div>
			<!-- <a class="order" href="{{url("carts/")}}">Place Order</a> -->
			<form action="{{URL::asset('checkout')}}" method="POST">
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<script
			  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			  data-key="pk_test_GIjjWsmv1wDgFvt2BG0Fhtpl"
			  data-amount="{{Cart::total()}}"
			  data-name="ThePips"
			  data-description="Buying product"
			  data-image="/img/documentation/checkout/marketplace.png"
			  data-locale="auto">
			</script>
			</form>
			<div class="total-item">
				<h3>OPTIONS</h3>
				<h4>COUPONS</h4>
				<a class="cpns" href="#">Apply Coupons</a>
				<p><a href="#">Log In</a> to use accounts - linked coupons</p>
			</div>
		</div>
	</div>
</div>
<!---->
<script >
$(document).ready(function(){
	var id = $('#id').val();
	var price = $('#price').html();
	console.log(price);
	var sub_total;
	$('#cart_quantity_up').click(function(){
		var qty = $('#quantity').val();
		qty++;
		$.ajax({
			url : "{{ URL::asset('/carts/quantity') }}/"+id,
			type : "post",
			data : { '_token' : $('input[name=_token]').val(),'quantity' : qty },
			success : function (){
				sub_total = price * qty;
				$('#subtotal').html(sub_total);
			}
		});
		$('#quantity').val(qty);
	});
	$('#cart_quantity_down').click(function(){
		var qty = $('#quantity').val();
		qty--;
		$.ajax({
			url : "{{ URL::asset('/carts/quantity') }}/"+id,
			type : "post",
			data : { '_token' : $('input[name=_token]').val(),'quantity' : qty },
			success : function (){
				sub_total = price * qty;
				$('#subtotal').html(sub_total);
			}
		});
		$('#quantity').val(qty);
	});

	// get subTotal

	var qty =	$('#quantity').val();
	sub_total = price * qty;
	$('#subtotal').html(sub_total);
});
</script>
@include('homepage._footer')
@endsection
