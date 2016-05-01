@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::open(['url' => 'product']) !!}
				@include('admin.products._form', ['submitButtonText' => 'Add Product'])
			{!! Form::close() !!}

 	<!---->


@endsection
