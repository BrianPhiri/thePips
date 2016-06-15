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
						<td>Order ID</td> <td>Total Price</td><td>Ordered On</td><td></td><td></td>    
					</tr>
				</thead>
				<tbody>
					@foreach($orders as $order)
						<tr>
							<td>{{ $order->id }}</td><td>{{ $order->total }}</td><td>{{ $order->created_at }}<td><td><input type="button" class="btn btn-link" value="View Items In the order" data-toggle="modal" data-target=".bs-example-modal-sm"></td>
                            <!-- Small modal -->
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    
                                </div>
                            </div>
                            </div>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection