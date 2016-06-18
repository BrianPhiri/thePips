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
			 This product belongs the sub category: <b>{{ $subcategory_name->name }}</b> under Category: <b>{{ $category_name->name }}</b>
			{!! Form::model($product,  ['method' => 'PATCH', 'url' => 'product/'. $product->id ]) !!}
				@include('admin.products._form', ['submitButtonText' => 'Update Product'])
			{!! Form::close() !!}

 	<!---->
@endsection
