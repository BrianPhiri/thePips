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
					<tr><td>Department of Information</td>  
					<td>:</td>  
					<td>Web Designer</td></tr>
					<tr>
					<td>Email</td>
					<td> :</td>
					<td><a href="http://info@gmail.com">info@lorem.com</a></td>
					</tr>
					<tr>
					<td>Role</td>
					<td> :</td>
					<td>System Admin</td>
					</tr>
					<tr>
					<td>Country </td>
					<td>:</td>
					<td>Kenya</td>
					</tr>
				</table>
			</div>
			<div class="clearfix"></div>
			</div>
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Followers</p>
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
			</div>
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



