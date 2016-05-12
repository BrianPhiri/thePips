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
		  <li><a href="men.html">Home</a></li>
		  <li class="active">Cart</li>
		 </ol>
		 <div class="cart-items">
			 <h2>My Shopping Bag (2)</h2>
				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec">
						<div class="cart-item cyc">
							 <img src="images/ts4.jpg"/>
						</div>
					   <div class="cart-item-info">
							 <h3>Mast & Harbour<span>Model No: 3578</span></h3>
							 <h4><span>Rs. $ </span>150.00</h4>
							 <p class="qty">Qty ::</p>
							 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					   </div>
					   <div class="clearfix"></div>
						<div class="delivery">
							 <p>Service Charges:: Rs.50.00</p>
				        </div>
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});
					});
			 </script>
			 <div class="cart-header2">
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
			  </div>
		 </div>

		 <div class="cart-total">
			 <a class="continue" href="#">Continue to basket</a>
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>
				 <span class="total">350.00</span>
				 <span>Discount</span>
				 <span class="total">---</span>
				 <span>Delivery Charges</span>
				 <span class="total">100.00</span>
				 <div class="clearfix"></div>
			 </div>
			 <h4 class="last-price">TOTAL</h4>
			 <span class="total final">450.00</span>
			 <div class="clearfix"></div>
			 <a class="order" href="#">Place Order</a>
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
@include('homepage._footer')
@endsection
