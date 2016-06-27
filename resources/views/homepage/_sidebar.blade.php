<!-- <div class="rsidebar span_1_of_left"> -->
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <?php $i= 1; ?>
						 @foreach($cat as $cat)
						 <div class="tab{!! $i !!}">
							 	<ul class="place">
								 <li class="sort">{{ $cat->name }}</li>
								 <li class="by"><img src="{{url('images/do.png')}}" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
								 @foreach($cat->category as $sub)
									<a href="{{URL::asset('products/category')}}/{{ $sub->id }}"><p>{{ $sub->name}}</p></a>
								 @endforeach
						     </div>
					    </div>
							<?php $i++; ?>
							@endforeach

						  <!-- <div class="tab2">
							 <ul class="place">
								 <li class="sort">Decor</li>
								 <li class="by"><img src="{{url('images/do.png')}}" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Shelves</p></a>

					      </div>
						  <div class="tab3">
							 <ul class="place">
								 <li class="sort">Lighting</li>
								 <li class="by"><img src="{{url('images/do.png')}}" alt=""></li>
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
								 <li class="by"><img src="{{url('images/do.png')}}" alt=""></li>
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
								 <li class="by"><img src="{{url('images/do.png')}}" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">
									<a href="#"><p>Sofas</p></a>
									<a href="#"><p>Fabric Sofas</p></a>
									<a href="#"><p>Beds</p></a>
									<a href="#"><p>Relax Chairs</p></a>
						     </div>
					      </div> -->

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
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
	$( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 400000,
		values: [ 8500, 350000 ],
		slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	}
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

});//]]>
</script>
<!---->
<!-- </div> -->
