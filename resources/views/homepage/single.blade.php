@extends('layouts.master')
@section('content')
<!-- header -->
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="home"><img src="images/logo.png" alt=""/></a>
		 </div>
		 <div class="header_right">
			 <div class="/login">
				 <a href="/login">/login</a>
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

<!---->
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="home">Home</a></li>
			 <li class="grid"><a class="color2" href="#">furniture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
								<ul>
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
									<li><a href="products">All Sofas</a></li>
									<li><a href="products">Fabric Sofas</a></li>
									<li><a href="products">Leather Sofas</a></li>
									<li><a href="products">L-shaped Sofas</a></li>
									<li><a href="products">Love Seats</a></li>
									<li><a href="products">Wooden Sofas</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
								<ul>
									<li><a href="products">Coffee Tables</a></li>
									<li><a href="products">Dinning Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Wooden Tables</a></li>
									<li><a href="products">Study Tables</a></li>
									<li><a href="products">Bar & Unit Stools</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
								<ul>
									<li><a href="products">Single Bed</a></li>
									<li><a href="products">Poster Bed</a></li>
									<li><a href="products">Sofa Cum Bed</a></li>
									<li><a href="products">Bunk Bed</a></li>
									<li><a href="products">King Size Bed</a></li>
									<li><a href="products">Metal Bed</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Seating</h4>
								<ul>
									<li><a href="products">Wing Chair</a></li>
									<li><a href="products">Accent Chair</a></li>
									<li><a href="products">Arm Chair</a></li>
									<li><a href="products">Mettal Chair</a></li>
									<li><a href="products">Folding Chair</a></li>
									<li><a href="products">Bean Bags</a></li>
								</ul>
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Solid Woods</h4>
								<ul>
									<li><a href="products">Side Tables</a></li>
									<li><a href="products">T.v Units</a></li>
									<li><a href="products">Dressing Tables</a></li>
									<li><a href="products">Wardrobes</a></li>
									<li><a href="products">Shoe Racks</a></li>
									<li><a href="products">Console Tables</a></li>
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
<div class="single-sec">
	 <div class="container">
		 <ol class="breadcrumb">
			 <li><a href="home">Home</a></li>
			 <li class="active">Products</li>
		 </ol>
		 <!-- start content -->
			<div class="col-md-9 det">
				  <div class="single_left">
					 <div class="grid images_3_of_2">
						 <ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image" src="images/ss1.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/ss1.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/ss2.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/ss2.jpg" class="img-responsive" title="" />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/ss4.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/ss4.jpg"class="img-responsive"  />
							</li>
						 </ul>
						 <div class="clearfix"></div>
				      </div>
				  </div>
				  <div class="single-right">
					 <h3>SPENCER 3+1+1 SOFA SET WITH 5 BIG CUSHIONS & WOODEN HANDLE</h3>
					 <div class="id"><h4>ID: SB2379</h4></div>
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
								 <li>MRP: <del>Rs 55000</del></li>
								 <li>Sellling Price:</li>
								 <li class="active">Rs 35000</li>
								 <a href="#">BUY NOW</a>
							 </ul>
						 </div>
						 <div class="check">
							 <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Enter pin code for delivery & availability</p>
							 <form class="navbar-form navbar-left" role="search">
								  <div class="form-group">
									<input type="text" class="form-control" placeholder="Enter Pin code">
								  </div>
								  <button type="submit" class="btn btn-default">Verify</button>
							 </form>
						 </div>
						 <div class="clearfix"></div>
					  </div>
					  <div class="item-list">
						 <ul>
							 <li>Material: Solid Wood</li>
							 <li>Color: Brown</li>
							 <li>Style: Solid Wood</li>
							 <li>Brand: Corelle</li>
							 <li><a href="#">Click here for more details</a></li>
						 </ul>
					  </div>
					  <div class="single-bottom1">
						<h6>Details</h6>
						<p class="prod-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
					 </div>
				  </div>
				  <div class="clearfix"></div>
				  <div class="sofaset-info">
						 <h4>Product Summary SPENCER 3+1+1 SOFA SET WITH 5 BIG CUSHIONS & WOODEN HANDLE</h4>
						 <ul>
							 <li>Dimensions: 3 Seater: Length 208 x Width 81 x Height 91.5 cm and 1 Seater: Length 99 x Width 81 x Height 91.5 cm</li>
							 <li>Assembly Type: Pre Assembled</li>
							 <li>Material: Wooden Structure, Chemical Treated And Seasoned Wood, 19 mm and 12 mm Commercial Ply and Mdf Used On Visible Parts</li>
							 <li>Looks amazing in a contemporary setting</li>
							 <li>Colour: Brown Jute, Sheron Brown</li>
							 <li>Type: Spencer 3 plus 1 plus 1 Sofa Set With 5 Big Cushions and 6 Small Cushions, Wooden Handle</li>
							 <li>Long lasting, durable and easy to use product</li>
							 <li>Contents: 3 Pc</li>
							 <li>Delivery Time: 7 to 10 days from the Day of Dispatch</li>
							 <li>Very classy and contemporary design</li>
							 <li>SUPC: SHG21458689652</li>
							 <li>Material: High Density Foam and Fabric</li>
						 </ul>
				  </div>
		    </div>
			<div class="rsidebar span_1_of_left">
				<section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">
								 <li class="sort">Furniture</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Love Seats</p></a>
									<a href="#"><p>Dinning Sets</p></a>
						     </div>
					      </div>
						  <div class="tab2">
							 <ul class="place">
								 <li class="sort">Decor</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Shelves</p></a>
									<a href="#"><p>Wall Racks</p></a>
									<a href="#"><p>Curios</p></a>
									<a href="#"><p>Ash Trays</p></a>
						     </div>
					      </div>
						  <div class="tab3">
							 <ul class="place">
								 <li class="sort">Lighting</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Table Lamps</p></a>
									<a href="#"><p>Tube Lights</p></a>
									<a href="#"><p>Study Lamps</p></a>
									<a href="#"><p>Usb Lamps</p></a>
						     </div>
					      </div>
						  <div class="tab4">
							 <ul class="place">
								 <li class="sort">Bed & Bath</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Towels</p></a>
									<a href="#"><p>Bath Roles</p></a>
									<a href="#"><p>Mirrors</p></a>
									<a href="#"><p>Soap Stands</p></a>
						     </div>
					      </div>
						  <div class="tab5">
							 <ul class="place">
								 <li class="sort">Fabric</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Beds</p></a>
									<a href="#"><p>Relax Chairs</p></a>
						     </div>
					      </div>

						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();

								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
							});
						</script>
						<!-- script -->
				 </section>
				 <section  class="sky-form">
					 <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>DISCOUNTS</h4>
					 <div class="row row1 scroll-pane">
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
						 </div>
						 <div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
						 </div>
					 </div>
				 </section>
				 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
							<ul class="dropdown-menu1">
								 <li><a href="">
								<div id="slider-range"></div>
								<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
							 </a></li>
						  </ul>
				   </section>
				   <!---->
					 <script type="text/javascript" src="js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
					<script type='text/javascript'>//<![CDATA[
					$(window).load(function(){
					 $( "#slider-range" ).slider({
								range: true,
								min: 0,
								max: 400000,
								values: [ 2500, 350000 ],
								slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
								}
					 });
					$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

					});//]]>

					</script>
					<section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dinner Sets   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3+1+1 Sofa Sets (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sofa Chairs     (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 Seater Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Display Units   (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L-shaped Sofas  (30)</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 Seater Sofas  (30)</label>
								</div>
							</div>
				   </section>
				 <section  class="sky-form">
						<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Brand</h4>
							<div class="row row1 scroll-pane">
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Roadstar</label>
								</div>
								<div class="col col-4">
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Tornado</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kissan</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Oakley</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Manga</label>
									<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Wega</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Kings</label>
									<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Zumba</label>
								</div>
							</div>
				   </section>
			   </div>
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
					 <li><a href="contact">Contact Us</a></li>
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
					 <li><a href="account">Your Account</a></li>
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
				 <li><a href="#">Thane</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Chennai</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Armenia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Kolkata</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Malaysia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Indonesia</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Mumbai</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Kerala</a></li>
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
			 <p>Copyright © 2015 Furnyish All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		 </div>
		 </div>
	 </div>
</div>
<!---->
@endsection
