@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="{{URL::asset('admin')}}">Home</a>
		<i class="fa fa-angle-right"></i>
	    <span>Order item</span>
    </h2>
</div>

<div class="validation-system">
	<div class="validation-form">
		<div class="clearfix"> </div>
		<div class="content-top">
			<table id="myTable" class="table table-hover table-stripped">
				<thead>
					<tr>
						<td>Product ID</td> <td>Price</td>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
						<tr>
							<td>{{ $item->name }}</td><td>{{$item->price}}</td></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
