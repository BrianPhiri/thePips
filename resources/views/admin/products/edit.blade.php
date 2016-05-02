@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="admin">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Products Edit</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::model($product,  ['method' => 'PATCH', 'url' => 'product/'. $product->id ]) !!}
				@include('admin.products._form', ['submitButtonText' => 'Update Product'])
			{!! Form::close() !!}

 	<!---->


@endsection
