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
						<td>Order Id</td> <td>Product Id</td> <td>Total Price </td><td>Order made on </td><td></td>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
						<tr>
							<td>{{ $item->orders_id }}</td><td>{{ $item->products_id }}</td><td>{{ $item->price }}</td><td>{{ $item->created_at}}<td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
