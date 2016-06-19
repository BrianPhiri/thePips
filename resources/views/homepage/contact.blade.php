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
		  <li class="active">Contact</li>
		 </ol>
		 <div class="contact-head">
		 	 <h2>CONTACT</h2>
			  <form>
				  <div class="col-md-6 contact-left">
						<input type="text" placeholder="Name" required/>
						<input type="text" placeholder="E-mail" required/>
						<input type="text" placeholder="Phone" required/>
				 </div>
				 <div class="col-md-6 contact-right">
						 <textarea placeholder="Message"></textarea>
						 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">
				  <ul>
					 <li><span></span></li>
					 <li>
						 <div class="address-info">
							 <h4>Nairobi, Kenya</h4>
							 <p>10-765 Pips-Avenue</p>
							 <p>Nairobi, Kenya,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="mailto:info@example.com">thePips11@gmail.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>
						 </div>
					 </li>
				  </ul>
				  <!-- -->
				  <ul>
					 <li><span></span></li>
					 <li>
						 <div class="address-info">
							 <h4>Mombasa, Kenya</h4>
							 <p>10-765 Nyali-Avenue</p>
							 <p>Mombasa, Kenya,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="#">thePips11@outlook.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>
						 </div>
					 </li>
				  </ul>
			 </div>
		 </div>
		 <div class="contact-map">
				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1578265.0941403757!2d-98.9828708842255!3d39.41170802696131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1407515822047"> </iframe>
	     </div>
	 </div>
</div>
<!---->
@include('homepage._footer')
@endsection
