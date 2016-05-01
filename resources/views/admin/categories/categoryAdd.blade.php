@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Category Add</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::open(['url' => 'category']) !!}
					@include('admin.categories._form', ['submitButtonText' => 'Add Category'])
			{!! Form::close() !!}

 	<!---->

 @endsection
