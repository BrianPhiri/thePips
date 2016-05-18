@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Subcategory Add</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::open(['url' => 'subcategory']) !!}
					@include('admin.subcategory._form', ['submitButtonText' => 'Add Sub-category'])
			{!! Form::close() !!}

 	<!---->

 @endsection
