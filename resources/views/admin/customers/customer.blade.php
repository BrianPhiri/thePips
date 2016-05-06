@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="index.html">Customers</a>
		<i class="fa fa-angle-right"></i>
	    <span>Customers</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table class="table table-hover">
				<thead>
					<tr>
						<td>Name</td> <td>E-mail Address</td> <td>Gender</td><td>Activation Status</td><td>Action</td>
					</tr>
				</thead>
				<tbody>
					<tr>@foreach($customers as $customer)
						<td>{{ $customer->surname }}, {{ $customer->othernames }}</td><td>{{ $customer->email }}</td><td>{{$customer->gender}}</td><td>{{ $customer->activation_status }}</td><td>{{ Form::button('View', array('class' => 'btn')) }}</td><td>{{ Form::button('Disable') }}</td>
					@endforeach</tr>
				</tbody>
			</table>	
		</div>
	</div>
</div>
@endsection