@extends('layouts.master')
@section('content')
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
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/banner2.jpg" alt=""></li>
				  <li><img src="images/banner1.jpg" alt=""></li>
				  <li><img src="images/banner3.jpg" alt=""></li>
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
				 <h4><a href="/products">SPECIAL ACCENTS OFFER</a></h4>
			 </div>
			 <div class="col-md-6 sofa-grid sofs">
				 <img src="images/t2.jpg" alt=""/>
				 <h3>SPECIAL DESIGN SOFAS</h3>
				 <h4><a href="/products">FABFURNISHING MELA</a></h4>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="new">
	 <div class="container">
		 <h3>specially designed for Furnyish</h3>
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <a href="/products"><img src="images/s1.jpg" alt=""/></a>
				 <div class="item-info">
					 <h4><a href="/products">Brown Furny Seater</a></h4>
					 <span>ID: SR5421</span>
					 <a href="/single">Buy Now</a>
				 </div>
			 </div>
			 <div class="item4">
				 <a href="/products"><img src="images/s4.jpg" alt=""/></a>
				  <div class="item-info4">
					 <h4><a href="/products">Dream Furniture Bed</a></h4>
					 <span>ID: SR5421</span>
					 <a href="/single">Buy Now</a>
				 </div>
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">
				 <div class="item-info2">
					 <h4><a href="/products">Georgia Sofa Set</a></h4>
					 <span>ID: GS7641</span>
					<a href="/single">Buy Now</a>
				 </div>
				 <a href="/products"><img src="images/s2.jpg" alt=""/></a>
			 </div>
			 <div class="item5">
				 <a href="/products"><img src="images/s5.jpg" alt=""/></a>
				 <div class="item-info5">
					 <h4><a href="/products">BlackBurn Law Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="/single">Buy Now</a>
				 </div>
			 </div>
		 </div>
		 <div class="new-items new_last">
			 <div class="item3">
				 <a href="/products"><img src="images/s3.jpg" alt=""/></a>
				 <div class="item-info3">
					 <h4><a href="/products">Shefan Dinning Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="/single">Buy Now</a>
				 </div>
			 </div>
			 <div class="item6">
				 <a href="/products"><img src="images/s6.jpg" alt=""/></a>
				 <div class="item-info6">
					 <h4><a href="/products">Irony Sofa Set</a></h4>
					 <span>ID: SR5421</span>
					 <a href="/single">Buy Now</a>
				 </div>

			 </div>
		 </div>
		 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="top-sellers">
	 <div class="container">
		 <h3>TOP - SELLERS</h3>
		 <div class="seller-grids">
			 <div class="col-md-3 seller-grid">
				 <a href="/products"><img src="images/ts2.jpg" alt=""/></a>
				 <h4><a href="/products">Carnival Doublecot Bed</a></h4>
				 <span>ID: DB4790</span>
				 <p>Rs. 25000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="/products"><img src="images/ts11.jpg" alt=""/></a>
				 <h4><a href="/products">Home Bar Furniture</a></h4>
				 <span>ID: BR4822</span>
				 <p>Rs. 5000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="/products"><img src="images/ts3.jpg" alt=""/></a>
				 <h4><a href="/products">L-shaped Fabric Sofa set</a></h4>
				 <span>ID: LF8560</span>
				 <p>Rs. 45000/-</p>
			 </div>
			 <div class="col-md-3 seller-grid">
				 <a href="/products"><img src="images/ts4.jpg" alt=""/></a>
				 <h4><a href="/products">Ritz Glass Dinning Table </a></h4>
				 <span>ID: DB4790</span>
				 <p>Rs. 18000/-</p>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="recommendation">
	 <div class="container">
		 <div class="recmnd-head">
			 <h3>RECOMMENDATIONS FOR YOU</h3>
		 </div>
		 <div class="bikes-grids">
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="/products"><img src="images/ts1.jpg" alt=""/></a>
					 <h4><a href="/products">King Size Bed</a></h4>
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="/products"><img src="images/r2.jpg" alt=""/></a>
					 <h4><a href="/products">Elite Diwan Seater</a></h4>
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="/products"><img src="images/r3.jpg" alt=""/></a>
					 <h4><a href="/products">Dior Corner Sofa</a></h4>
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="/products"><img src="images/r4.jpg" alt=""/></a>
					 <h4><a href="/products">Alia Modular Sofa</a></h4>
					 <p>ID: KS3989</p>
				 </li>
				 <li>
					 <a href="/products"><img src="images/r5.jpg" alt=""/></a>
					 <h4><a href="/products">King Size Bed</a></h4>
					 <p>ID: KS3989</p>
				 </li>
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
