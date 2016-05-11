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
					<div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>products</h5>
					<label id="products"></label>
				</div>
					<!-- <div class="col-md-6 top-content1">
						<div id="demo-pie-2" class="pie-title-center" data-percent="50"> <span class="pie-value"></span> </div>
					</div> -->
				 <div class="clearfix"> </div>
				</div>
				<div class="content-top-1">
				<div class="col-md-6 top-content">
					<h5>customers</h5>
					<label id="customers"></label>
				</div>
				 <div class="clearfix"> </div>
				</div>
			</div>
      <!-- start stats -->
      <script>
        $.ajax({
           url: "{{ URL::asset('/summary') }}",
           type: "GET",
           success: function(data){
             $.each(data, function(index, reportObj){
     					productCount = reportObj.products;
              categoryCount = reportObj.categories;
              customerCount = reportObj.customers;
     				});
            //  console.log(productCount);
             $('#products').html(productCount);
             $('#category').html(categoryCount);
             $('#customers').html(customerCount);
            },
          });

      </script>
      <!-- end stats -->
			<div class="col-md-8 content-top-2">
				<!---start-chart---->
				<!----->
				<div class="content-graph">
				<div class="content-color">
					<div class="content-ch"><p><i></i>Sales</p><span>100%</span>
					<div class="clearfix"> </div>
					</div>
					<div class="content-ch1"><p><i></i>customers</p><span> 50%</span>
					<div class="clearfix"> </div>
					</div>
					</div>
				</div>

        >
				<!--graph-->
		<link rel="stylesheet" href="css/graph.css">
		<!--//graph-->
							<script src="js/jquery.flot.js"></script>
									<script>
									$(document).ready(function () {

										// Graph Data ##############################################
										var graphData = [{
												// Visits
												data: [ [6, 1300], [7, 1600], [8, 1900], [9, 2100], [10, 2500], [11, 2200], [12, 2000], [13, 1950], [14, 1900], [15, 2000] ],
												color: '#999999'
											}, {
												// Returning Visits
												data: [ [6, 500], [7, 600], [8, 550], [9, 600], [10, 800], [11, 900], [12, 800], [13, 850], [14, 830], [15, 1000] ],
												color: '#999999',
												points: { radius: 4, fillColor: '#7f8c8d' }
											}
										];

										// Lines Graph #############################################
										$.plot($('#graph-lines'), graphData, {
											series: {
												points: {
													show: true,
													radius: 5
												},
												lines: {
													show: true
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});

										// Bars Graph ##############################################
										$.plot($('#graph-bars'), graphData, {
											series: {
												bars: {
													show: true,
													barWidth: .9,
													align: 'center'
												},
												shadowSize: 0
											},
											grid: {
												color: '#7f8c8d',
												borderColor: 'transparent',
												borderWidth: 20,
												hoverable: true
											},
											xaxis: {
												tickColor: 'transparent',
												tickDecimals: 2
											},
											yaxis: {
												tickSize: 1000
											}
										});

										// Graph Toggle ############################################
										$('#graph-bars').hide();

										$('#lines').on('click', function (e) {
											$('#bars').removeClass('active');
											$('#graph-bars').fadeOut();
											$(this).addClass('active');
											$('#graph-lines').fadeIn();
											e.preventDefault();
										});

										$('#bars').on('click', function (e) {
											$('#lines').removeClass('active');
											$('#graph-lines').fadeOut();
											$(this).addClass('active');
											$('#graph-bars').fadeIn().removeClass('hidden');
											e.preventDefault();
										});

										// Tooltip #################################################
										function showTooltip(x, y, contents) {
											$('<div id="tooltip">' + contents + '</div>').css({
												top: y - 16,
												left: x + 20
											}).appendTo('body').fadeIn();
										}

										var previousPoint = null;

										$('#graph-lines, #graph-bars').bind('plothover', function (event, pos, item) {
											if (item) {
												if (previousPoint != item.dataIndex) {
													previousPoint = item.dataIndex;
													$('#tooltip').remove();
													var x = item.datapoint[0],
														y = item.datapoint[1];
														showTooltip(item.pageX, item.pageY, y + ' visitors at ' + x + '.00h');
												}
											} else {
												$('#tooltip').remove();
												previousPoint = null;
											}
										});

									});
									</script>
				<div class="graph-container">

									<div id="graph-lines"> </div>
									<div id="graph-bars"> </div>
								</div>

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
			</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//content-->



 @endsection
