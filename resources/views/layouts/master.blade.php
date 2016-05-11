<!DOCTYPE HTML>
<html>
<head>
<title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Cart :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="{{ URL::asset('css/frontpagestyle.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/etalage.css" type="text/css">
<!-- start menu -->
<link href="{{ URL::asset('css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{ asset('js/menu_jquery.js') }}"></script>
<script src="{{ asset('js/simpleCart.min.js') }}"> </script>
  <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
  <script src="{{ asset('js/jquery.etalage.min.js')}}"></script>
  <script>
  			jQuery(document).ready(function($){

  				$('#etalage').etalage({
  					thumb_image_width: 300,
  					thumb_image_height: 400,
  					source_image_width: 900,
  					source_image_height: 1200,
  					show_hint: true,
  					click_callback: function(image_anchor, instance_id){
  						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
  					}
  				});

  			});
  		</script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>

</head>
<body>
<!-- THIS IS THE TOP MOST GREEN NAVBAR!! -->
  <div class="top_bg">
  	<div class="container">
  		<div class="header_top-sec">
  			<div class="top_right">
  				<ul>
  					<li><a href="#">help</a></li>|
  					<li><a href="contact">Contact</a></li>|
  					<li><a href="login">Track Order</a></li>
  				</ul>
  			</div>
  			<div class="top_left">
  				<ul>
  					<li class="top_link">Email:<a href="mailto@example.com">info(at)Mobilya.com</a></li>|
  					<li class="top_link"><a href="login">My Account</a></li>|
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
  <!-- END OF SECTION -->
  <div class="header_top">
   <div class="container">
     <div class="logo">
      <a href="home"><img src="images/logo.png" alt=""/></a>
     </div>
     <div class="header_right">
       <div class="login">
         <a href="login">LOGIN</a>
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
  <!-- DYNAMIC ALLOCATION BIT -->
  <div class="mega_nav">
   <div class="container">
     <div class="menu_sec">
     <!-- start header menu -->
     <ul class="megamenu skyblue">
       <li class="active grid"><a class="color1" href="home">Home</a></li>
       <li class="grid"><a class="color2" href="#">furniture</a>
       <!--  <div class="megapanel">
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
          </div> -->
        </li>
        <!-- THIS IS IT !!! -->
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
   <!-- THIS IS IT !!! -->
  @yield('content')
  <!---->
</body>
</html>
