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
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="images/thePIPS_LOGO.png" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6>The Pips</h6>
				<table>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td>
							{{ $user->surname }}, {{ $user->othernames }}
						</td>
					</tr>
					<tr>
						<td>Email</td>
						<td> :</td>
						<td>{{ $user->email }}</td>
					</tr>
					<tr>
						<td>Address</td>
						<td> :</td>
						<td> 5225255</td>
					</tr>
					<tr>
						<td>Town </td>
						<td>:</td>
						<td>{{$user->town}}</td>
					</tr>
					<tr>
						<td>Gender </td>
						<td>:</td>
						<td>{{ $user->gender}}</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>348</h4>
				<p>Following</p>
				<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Snippets</p>
				<a href="#"><i class="fa fa-cog"></i>Options</a>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-btn">

                <button type="button" href="#" class="btn bg-red">Save changes</button>
           <div class="clearfix"></div>
			</div>


		</div>
	</div>
	<!--//gallery-->
		<!---->
@endsection
