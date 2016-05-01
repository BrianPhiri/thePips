@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="">Product</a>
		<i class="fa fa-angle-right"></i>
	    <span>Products</span>
    </h2>
</div>

<div class="validation-system">

	<div class="validation-form">
<!---->
	<div class="clearfix"> </div>
	<div class="content-top">
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Name</td><td>Description</td><td>Action</td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $products as  $product)
            <tr>
                <td>{{ $product->product_name }}</td><td style="word-break: break-all; word-wrap:break-word;">{{ $product->product_description }}</td><td><a href="product/{{$product->id }}/edit" class="btn btn-warning">Edit</a></td>
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
