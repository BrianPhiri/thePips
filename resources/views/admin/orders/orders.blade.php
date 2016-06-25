@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="/admin">Home</a>
		<i class="fa fa-angle-right"></i>
	    <span>Orders</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table id="myTable" class="table table-hover table-stripped">
				<thead>
					<tr>
						<td>Order ID</td> <td>Customer ID</td><td>Total Price</td><td>Ordered On</td><td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td><td>{{$order->user_id}}</td><td>{{ $order->total }}</td><td>{{ $order->created_at }}</td><td><a href="{{URL::asset('orders')}}/{{$order->id}}/items" class="btn btn-primary">View order details</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
