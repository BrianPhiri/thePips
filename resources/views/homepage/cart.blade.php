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
		 @if(count($cart))
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
			   @foreach($cart as $item)
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="{{URL::asset('image_uploads')}}/"/>
						</div>
					   <div class="cart-item-info">
							 <h3>{{$item->name}}<span>Model No: {{$item->id}}</span></h3>
							 <h4><span>Ksh </span>{{$item->price}}</h4>
							 <p class="qty">Qty ::</p>
							 <a class="cart_quantity_up" href='{{url("carts?product_id=$item->id&increment=1")}}'> + </a>
							 <input min="1" type="text" id="quantity" name="quantity" value="{{$item->qty}}" class="form-control input-small">
							<a class="cart_quantity_down" href='{{url("carts?product_id=$item->id&decrease=1")}}'> - </a>
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p><h4>Sub-Total:: {{$item->subtotal}}</h4></p>
				        </div>
				  </div>
			 </div>
			 @endforeach
			 @else
                <p>You have no items in the shopping cart</p>
            @endif
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
						$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});
					});
			 </script>
			 <!-- <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec">
						<div class="cart-item">
							 <img src="images/ts1.jpg"/>
						</div>
					   <div class="cart-item-info">
							 <h3>Woolen Shrug<span>Model No: 8768</span></h3>
							 <h4><span>Rs. $ </span>200.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.50.00</p>
				        </div>
				  </div>
			  </div> -->
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
			 <a class="order" href="#">Place Order</a>
			<!--  <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div> -->
			</div>
	 </div>
</div>
<!---->
@include('homepage._footer')
@endsection
