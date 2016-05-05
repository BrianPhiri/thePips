@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="index.html">Category</a>
		<i class="fa fa-angle-right"></i>
	    <span>Category</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>Name</td> <td>E-mail Address</td> <td>Gender</td><td>Activation Status</td>
					</tr>
				</thead>
				<tbody>
					@foreach($customers as $customer)
						<td>{{ $customer->surname }}, {{ $customer->othernames }}</td><td>{{ $customer->email }}</td><td>{{$customer->gender}}</td><td>{{ $customer->activation_status }}</td>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
</div>
@endsection