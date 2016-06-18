@extends('layouts.master')
@section('content')
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="single-sec">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="/">Home</a></li>
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
			<section  class="sky-form">
				<div class="product_right">
					<h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
					<div class="tab1">
						<ul class="place">
							<li class="sort">Furniture</li>
							<li class="by"><img src="{{URL::asset('images/do.png') }}" alt=""></li>
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
							<li class="by"><img src="{{URL::asset('images/do.png') }}" alt=""></li>
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
							<li class="by"><img src="{{URL::asset('images/do.png') }}" alt=""></li>
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
							<li class="by"><img src="{{URL::asset('images/do.png') }}" alt=""></li>
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
							<li class="by"><img src="{{URL::asset('images/do.png') }}" alt=""></li>
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
				<!-- <section  class="sky-form">
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
				</section> -->
				<!-- <section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Price</h4>
					<ul class="dropdown-menu1">
						<li><a href="">
							<div id="slider-range"></div>
							<input type="text" id="amount" style="border: 0; font-weight: NORMAL;   font-family: 'Arimo', sans-serif;" />
						</a></li>
					</ul>
				</section> -->
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
				<!-- <section  class="sky-form">
					<h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Type</h4>
					<div class="row row1 scroll-pane">
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Sofa Cum Beds (30)</label>
						</div>
						<div class="col col-4">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Dinner Sets   	(30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3+1+1 Sofa Sets (30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Sofa Chairs     (30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>2 Seater Sofas  (30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Display Units   (30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>L-shaped Sofas  (30)</label>
							<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>3 Seater Sofas  (30)</label>
						</div>
					</div>
				</section> -->
				<!-- <section  class="sky-form">
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
				</section> -->
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
@include('homepage._footer')
@endsection
