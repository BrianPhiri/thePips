@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="/admin">Home</a>
		<i class="fa fa-angle-right"></i>
	    <span>Customers</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table id="myTable" class="table table-hover table-stripped">
				<thead>
					<tr>
						<td>Name</td> <td>E-mail Address</td><td>Actions</td><td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($customers as $customer)
						<tr>
							<td>{{ $customer->name }}</td><td>{{ $customer->email }}</td><td><a class="btn btn-warning" href="customers/{{ $customer->id }}">View</a><td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
