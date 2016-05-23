@extends('layouts.adminlayout')
@section('content')

<!--banner-->
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Category Edit</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">

 		<div class="validation-form">
 	<!---->

			{!! Form::model($category, ['method' => 'PATCH', 'url' => 'category/'. $category->id ]) !!}
			    @include('admin.categories._form', ['submitButtonText' => 'Update Category'])
			{!! Form::close() !!}

 	<!---->

 @endsection
