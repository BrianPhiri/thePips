@extends('layouts.adminlayout')
@section('content')

 	<!--banner-->
		    <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Profile</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Customer Information</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/thePIPS_LOGO.png" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6>The Pips E-Commerce</h6>
				<table>
				<tr><td>Name</td>
				<td>:</td>
				<td>{{ $user->name }}</td></tr>

				<tr>
				<td>Email</td>
				<td> :</td>
				<td><a href="#">{{ $user->email }}</a></td>
				</tr>
				<tr>
				<td>Role</td>
				<td> :</td>
				<td>{{ $user->role }}</td>
				</tr>
				<tr>
				<!--<td>Country </td>
				<td>:</td>
				<td>Kenya</td> -->
				</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-6 profile-fo">
				<h4>{{ $orderCount }}</h4>
				<p>Orders</p>
				<a href="{{URL::asset('user/orders')}}/{{$user->id}}" class="pro"> <i class=" glyphicon glyphicon-star"> </i>List Of orders</a>
			</div>
			<div class="col-md-6 profile-fo">
				<h4>{{$itemsCount}}</h4>
				<p>Items Bought</p>
				<a href="{{ URL::asset('user/orders')}}/{{$user->id}}/items" class="pro1"><i class=" glyphicon glyphicon-star-empty"></i>List of Items</a>
			</div>

			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">
           <div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//gallery-->
		<!---->
@endsection
