@extends('layouts.master')
@section('content')
<!-- header -->
<!-- header -->
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="/home"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header_right">
			 <div class="login">
				 <a href="/login">LOGIN</a>
			 </div>
			 <div class="cart box_1">
				<a href="/cart">
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
			 <li class="active grid"><a class="color1" href="/home">Home</a></li>
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
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="/home">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form>
					 <h5>User Name:</h5>
					 <input type="text" value="">
					 <h5>Password:</h5>
					 <input type="password" value="">
					 <input type="submit" value="Login">
					  <a href="#">Forgot Password ?</a>
				 </form>
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="/account">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>
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
					 <li><a href="/account">Your Account</a></li>
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
<!---->
@endsection
