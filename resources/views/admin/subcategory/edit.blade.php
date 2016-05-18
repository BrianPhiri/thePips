@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="dashboard">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Subcategory Edit</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::model($subcategory,  ['method' => 'PATCH', 'url' => 'subcategory/'. $subcategory->id ]) !!}
				@include('admin.subcategory._form', ['submitButtonText' => 'Add Sub-category'])
			{!! Form::close() !!}

 	<!---->


@endsection
