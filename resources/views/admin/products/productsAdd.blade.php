@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="admin">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Products</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::open(array('url' => '/product', 'files' => true), ['onsubmit' => 'return validate()']) !!}
				@include('admin.products._form', ['submitButtonText' => 'Add Product'])
			{!! Form::close() !!}

 	<!---->

@endsection
