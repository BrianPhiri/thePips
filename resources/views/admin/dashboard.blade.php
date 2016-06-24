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


			<div class="col-md-6 ">
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
					<h5>subcategories</h5>
					<label id="subcategories"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-2" class="pie-title-center" data-percent="{{ $subcategories }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Products</h5>
					<label id="customers"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-3" class="pie-title-center" data-percent="{{ $products }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>

			<div class="col-md-6 content-top-2">
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Orders</h5>
					<label id="orders"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-4" class="pie-title-center" data-percent="{{ $orders }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Items Bought</h5>
					<label id="orderItems"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-5" class="pie-title-center" data-percent="{{ $orderItems }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>Customers</h5>
					<label id="customers"></label>
				</div>
				<div class="col-md-6 top-content1">
					<div id="demo-pie-6" class="pie-title-center" data-percent="{{ $customers }}"> <span class="pie-value"></span> </div>
				</div>
				 <div class="clearfix"> </div>
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
						orderCount = reportObj.orders;
						itemCount = reportObj.orderItems;
						subcategories = reportObj.subcategories;
					});
					//  console.log(productCount);
					 $('#products').html(productCount);
					 $('#category').html(categoryCount);
					 $('#subcategories').html(subcategoriesCount);
					 $('#customers').html(customerCount);
					 $('#orders').html(orderCount);
					 $('#orderItems').html(itemCount);
					},
				});

		</script>

 @endsection
