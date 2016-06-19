@extends('layouts.master')
@section('content')
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="contact">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="/">Home</a></li>
		  <li class="active">About us</li>
		 </ol>
		 <p>
		 	We as the Pips welcome you to our website. We are a team of four hard working citizens. <br>
		 	French <br>
		 	Chausiku <br>
		 	Sharl <br>
		 	Mwathy	<br>

		 </p>
		 <div class="clearfix"></div>
		 <div class="contact-map">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
	     </div>
	 </div>
</div>
<!---->
@include('homepage._footer')
@endsection
