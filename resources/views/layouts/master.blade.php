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
  @yield('content')
  <!---->
</body>
</html>
