<!DOCTYPE HTML>
<html>
<head>
<title>Furnyish Store a Ecommerce Category Flat Bootstarp Responsive Website Template | Cart :: w3layouts</title>
<!-- Font Awesome -->
<link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet">
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
  <span>
    <style type="text/css">
    .mail
    {
      width: 70%;
      padding: 8px;font-size: 1em;
      font-weight: 400;
      border: 1px solid #D6D6D6;
      outline: none;
      color: #5d5959;margin-bottom:2em;
    }
    </style>
  </span>
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
          <!-- Code for Unauthenticated Users -->
          @if (Auth::guest())
  					<i class="fa fa-btn fa-sign-in"></i> <li class="top_link"><a href="login">Sign In</a></li>|
            <i class="fa fa-btn fa-sign-out"></i> <li class="top_link"><a href="logout">Sign Out</a></li>|
            <i class="fa fa-btn fa-user"></i> <li class="top_link"><a href="account">New User ?</a>
            @else
            <!-- Displays the name of the authenticated users. -->
              <li><a href="{{ url('/account') }}"><i class="fa fa-btn fa-user"></i> {{ Auth::user()->name }}</a></li> |
              <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Sign Out</a></li>
            @endif  
  				</ul>
  				<!-- <div class="social">
  					<ul>
  						<li><a href="#"><i class="facebook"></i></a></li>
  						<li><a href="#"><i class="twitter"></i></a></li>
  						<li><a href="#"><i class="dribble"></i></a></li>
  						<li><a href="#"><i class="google"></i></a></li>
  					</ul>
  				</div> -->
  			</div>
  				<div class="clearfix"> </div>
  		</div>
  	</div>
  </div>
  <!-- END OF SECTION -->
  <!-- DYNAMIC ALLOCATION BIT -->

  @yield('content')
  <!---->
</body>
</html>
