@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="">Orders</a>
		<i class="fa fa-angle-right"></i>
	    <span>Orders</span>
    </h2>
</div>

<div class="validation-system">

	<div class="validation-form">
<!---->
	<div class="clearfix"> </div>
	<div class="content-top">
    <table id="myTable" class="table table-hover">
        <thead>
            <tr>
                <td><b>Product</b> Number</td><td><b>Customer ID</b></td><td><b>Action</b></td><td></td><td></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $orders as  $order)
            <tr>
							  <td>{{ $order->id }}</td><td>{{ $order->customer_id }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $order->id }}">View</button></td>
						</tr>
            @endforeach
        </tbody>
    </table>
</div>
	<div class="clearfix"> </div>

<!---->
</div>
</div>

@endsection
