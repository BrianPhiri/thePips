@extends('layouts.adminlayout')
@section('content')

 	<!--banner-->
		    <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Customer</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Profile</h3>
			<div class="profile-bottom-top">
			<div class="col-md-4 profile-bottom-img">
				<img src="{{ URL::asset('images/thePIPS_LOGO.png')}}" alt="">
			</div>
			<div class="col-md-8 profile-text">
				<h6>The Pips</h6>
				<table>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td>
							{{ $user->name }}
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
						<td>{{ $user->address }}</td>
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
			<hr>
			</div>
			<div class="profile-bottom-bottom">
				<table id="myOrderTable" class="table table-hover">
					<thead>
						<tr>
							<td>Order id</td><td>Product</td><td>Quantity</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>3002</td><td>Table</td><td>2</td>
						</tr>
					</tbody>
				</table>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
	    $('#myOrderTable').DataTable({
				searching: false,
				select: true,
				ordering: true
			});
	});
	</script>
@endsection
