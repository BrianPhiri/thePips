@extends('layouts.master')
@section('content')
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="/contact">Contact</a></li>|
					<li><a href="/login">Track Order</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email: <a href="mailto@example.com">info(at)Mobilya.com</a></li>|
					<li class="top_link"><a href="/login">My Account</a></li>|
				</ul>
				<div class="social">
					<ul>
						<li><a href="#"><i class="facebook"></i></a></li>
						<li><a href="#"><i class="twitter"></i></a></li>
						<li><a href="#"><i class="dribble"></i></a></li>
						<li><a href="#"><i class="google"></i></a></li>
					</ul>
				</div>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.html"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header_right">
			 <div class="login">
				 <a href="/login">LOGIN</a>
			 </div>
			 <div class="cart box_1">
				<a href="cart.html">
					<h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="images/bag.png" alt=""></h3>
				</a>
				<p><a href="javascript:;" class="simpleCart_empty">Empty cart</a></p>
				<div class="clearfix"> </div>
			 </div>
		 </div>
		  <div class="clearfix"></div>
	 </div>
</div>
<!--cart-->

<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.html">Home</a></li>
			 <li class="grid"><a class="color2" href="#">furniture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">living</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color5" href="#">kitchen & dinning</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">appliances</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color7" href="#">decor</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>

				<li><a class="color8" href="#">kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="/products">All Sofas</a></li>
									<li><a href="/products">Fabric Sofas</a></li>
									<li><a href="/products">Leather Sofas</a></li>
									<li><a href="/products">L-shaped Sofas</a></li>
									<li><a href="/products">Love Seats</a></li>
									<li><a href="/products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="/products">Coffee Tables</a></li>
									<li><a href="/products">Dinning Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Wooden Tables</a></li>
									<li><a href="/products">Study Tables</a></li>
									<li><a href="/products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="/products">Single Bed</a></li>
									<li><a href="/products">Poster Bed</a></li>
									<li><a href="/products">Sofa Cum Bed</a></li>
									<li><a href="/products">Bunk Bed</a></li>
									<li><a href="/products">King Size Bed</a></li>
									<li><a href="/products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="/products">Wing Chair</a></li>
									<li><a href="/products">Accent Chair</a></li>
									<li><a href="/products">Arm Chair</a></li>
									<li><a href="/products">Mettal Chair</a></li>
									<li><a href="/products">Folding Chair</a></li>
									<li><a href="/products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="/products">Side Tables</a></li>
									<li><a href="/products">T.v Units</a></li>
									<li><a href="/products">Dressing Tables</a></li>
									<li><a href="/products">Wardrobes</a></li>
									<li><a href="/products">Shoe Racks</a></li>
									<li><a href="/products">Console Tables</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			   </ul>
			   <div class="search">
				 <form>
					<input type="text" value="" placeholder="Search...">
					<input type="submit" value="">
					</form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
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
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="/contact">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Carrers</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Furinture</a></li>
					 <li><a href="#">> Bean Bags</a></li>
					 <li><a href="#">> Decor</a></li>
					 <li><a href="#">> Kichen & Dinning</a></li>
					 <li><a href="#">> Bed & Bath</a></li>
					 <li><a href="#">...More</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="store">
			<ul>
				 <li class="active">OUR STORE LOCATOR::</li>
				 <li><a href="#">Noida</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Belgium</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">China</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Germany</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Japan</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Armenia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">South Africa</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Malaysia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Indonesia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Mumbai</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Portugal</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Spain</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Northern Ireland</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Mohali</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Gurgaon</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Panchkula</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Ambala</a></li>
			 </ul>
		 </div>
		 <div class="copywrite">
			 <p>Copyright © 2015 Furnyish Store All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>
		 </div>
	 </div>
</div>
@endsection
