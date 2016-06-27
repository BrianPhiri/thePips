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
		<div class="row">
			<center><h1>The Crew</h1></center><br>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img src="{{url('images/mwathi.jpg')}} " style="width="200px"; height="200px" alt="..." class="img-rounded">
				<p>Brian Mwathi</p>
			</div>
			<div class="col-md-3">
				<img src="{{url('images/phiri.jpg')}} " style="width="200px"; height="200px" alt="..." class="img-rounded">
				<p>Brian Phiri</p>
			</div>
			<div class="col-md-3">
				<img src="{{url('images/nick.jpg')}} " style="width="200px"; height="200px" alt="..." class="img-rounded">
				<p>Nickson Munge</p>
			</div>
			<div class="col-md-3">
				<img src="{{url('images/sharl.jpg')}} " style="width="200px"; height="200px" alt="..." class="img-rounded">
				<p>Sharleen Irungu</p>
			</div>
		</div>
		<div class="row">
		<br>
		</div>
		<div class="contact-map">
			<iframe src="https://www.google.com/maps/embed?pb=AIzaSyBMHnvbHYz8KwOfKOzgu0uQnM-FpZyXeMY"> </iframe>
			<div style="height:310px;width:1140px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="display-google-map" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Strathmore+University,+Nairobi+West,+Nairobi,+Kenya&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code" href="https://www.interserver-coupons.com" id="grab-map-authorization">visit them now</a><style>#display-google-map .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=9f4d15a6-d45b-7768-579b-a9d23dd1f65b&c=google-map-code&u=1466323114" defer="defer" async="async"></script>
		</div>
	</div>
</div>
<!---->
@include('homepage._footer')
@endsection
