@extends('layouts.master')
@section('content')
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="contact">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{URL::asset('/')}}">Home</a></li>
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
			<div style="height:310px;width:1140px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Strathmore+University,+Nairobi+West,+Nairobi,+Kenya&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code" href="https://www.interserver-coupons.com" id="grab-map-authorization">visit them now</a><style>#display-google-map .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=9f4d15a6-d45b-7768-579b-a9d23dd1f65b&c=google-map-code&u=1466323114" defer="defer" async="async"></script>
		</div>
	</div>
</div>
<!---->
@include('homepage._footer')
@endsection
