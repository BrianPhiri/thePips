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
			      <div class="vali-form">
			      <div class="col-md-6 form-group1">
							{!! Form::label('catname', 'Category Name') !!}
							{!! Form::text('categoryname', null, ['placeholder' => 'Category Name','required' => '']) !!}
			      </div>
			      <div class="clearfix"> </div>
			      </div>
			        <div class="clearfix"> </div>
			      <div class="col-md-12 form-group1 ">
							{!! Form::label('catdes', 'Category Description') !!}
							{!! Form::textarea('categorydescription', null, ['placeholder' => 'Category Description...','required' => '']) !!}
			      </div>
			      <div class="clearfix"> </div>
			      </div>
			        <div class="clearfix"> </div>

			      <div class="col-md-12 form-group">
			        {!! Form::submit('Add category', ['class' => 'btn btn-primary']) !!}
			        <button type="reset" class="btn btn-default">Reset</button>
			      </div>
			    <div class="clearfix"> </div>
				{!! Form::close() !!}


 	<!---->

 @endsection
