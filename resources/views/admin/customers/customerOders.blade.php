@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="{{URL::asset('/admin')}}">Home</a>
		<i class="fa fa-angle-right"></i>
	    <span>Customer Orders</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table id="myTable" class="table table-hover table-stripped">
				<thead>
					<tr>
						<td>Order Id</td> <td>Total Price </td><td>Order made on </td><td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td><td>{{ $order->total }}</td><td>{{ $order->created_at}}<td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
