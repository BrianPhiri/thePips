@extends('layouts.adminlayout')
@section('content')

  		<!--banner-->
		    <div class="banner">

				<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Dashboard</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
		<div class="content-top">


			<div class="col-md-4 ">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Category</h5>
					<label id="category"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-1" class="pie-title-center" data-percent="{{ $categories }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>products</h5>
					<label id="products"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-2" class="pie-title-center" data-percent="{{ $products }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>customers</h5>
					<label id="customers"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-3" class="pie-title-center" data-percent="{{ $customers }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
				<div class="content-graph">
				<div class="content-color = '#7f8c8d'">
					<div class="content-ch"><p><i></i>Sales</p><span>100%</span>
					<div class="clearfix"> </div>
					</div>
					<div class="content-ch1"><p><i></i>customers</p><span> 50%</span>
					<div class="clearfix"> </div>
					</div>
					</div>
				</div>

				<!--graph-->
				<!-- latest post -->
				<div >
						<h3>Latest Products</h3>
						<!-- start content_slider -->
						<div style="opacity: 1; display: block;" id="owl-demo" class="owl-carousel text-center owl-theme">
							<div class="owl-wrapper-outer"><div style="width: 1862px; left: 0px; display: block; transition: all 800ms ease 0s; transform: translate3d(-266px, 0px, 0px);" class="owl-wrapper">
								@foreach($latestProduct as $image)
								<div style="width: 133px;" class="owl-item">
									<div class="item">
											<img src="image_uploads/{{ $image->image }}" style="display: block;" class="lazyOwl img-responsive" alt="name">
									</div>
								</div>
								@endforeach
						</div>
						<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div>
					</div>
						</div>
				<!-- end latest -->
		</div>
		</div>
		<div class="clearfix"> </div>
		</div>
		<!---->


		<div class="content-mid">

		<!-- requried-jsfiles-for owl -->
		<link href="css/owl.carousel.css" rel="stylesheet">
		<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel({
						items : 3,
						lazyLoad : true,
						autoPlay : true,
						pagination : true,
						nav:true,
					});
				});
			</script>
		<!-- //requried-jsfiles-for owl -->
			</div>
			<div class="clearfix"> </div>
		</div>
		<!----->
			</div>
			</figure>
			</div>
			</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->

		<script>
			$.ajax({
				 url: "{{ URL::asset('/summary') }}",
				 type: "GET",
				 success: function(data){
					 $.each(data, function(index, reportObj){
						productCount = reportObj.products;
						categoryCount = reportObj.categories;
						customerCount = reportObj.customers;
						productImages = reportObj.latestProducts;
					});
					//  console.log(productCount);
					 $('#products').html(productCount);
					 $('#category').html(categoryCount);
					 $('#customers').html(customerCount);
					},
				});

		</script>

 @endsection
