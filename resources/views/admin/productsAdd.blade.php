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

			{!! Form::open(['url' => 'products']) !!}
         	<div class="vali-form">
         	 <div class="col-md-6 form-group1">
              <label class="control-label">Image Upload</label>
              <img src="..." alt="..." class="img-thumbnail">
							{!! Form::file('image'); !!}
            </div>
						<div class="clearfix"> </div>
						<!--  -->
						 <div class="col-md-12 form-group2">
							 {!! Form::label('catname', 'Category') !!}
							 {!! Form::select('category', array(
									 'Cats' ,
									 'Dogs',
							 )) !!}
					 </div>
					 <!--  -->
					 <div class="clearfix"> </div>
					 <!--  -->
						<div class="col-md-12 form-group2">
							{!! Form::label('subcatname', 'Sub-Category') !!}
							{!! Form::select('subcategory', array(
									'Cats' ,
									'Dogs',
							)) !!}
					</div>
					<!--  -->
            <div class="clearfix"> </div>
            <div class="col-md-6 form-group1">
							{!! Form::label('catname', 'Product Name') !!}
							{!! Form::text('productname', null, ['placeholder' => 'Product Name','required' => '']) !!}
            </div>
            <div class="col-md-12 form-group1">
							{!! Form::label('prodprice', 'Product Price') !!}
							{!! Form::text('productprice', null, ['placeholder' => 'Product Price','required' => '']) !!}
               <p class=" hint-block">Price values from 1-***</p>
            </div>
             <div class="clearfix"> </div>
<<<<<<< HEAD
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Category</label>
            <select>
                    <option>Beds</option>
					<option>Desks</option>
					<option>Drawers</option>
					<option>Seats</option>
                    <option>Sets</option>
                    <option>Shelves</option>
                    <option> Sofa Sets</option>
                    <option>Storage</option>
					<option>Tables</option>
            </select>
            </div>
=======

>>>>>>> 52e1b2e8ac287334aef84bd982a4e9dfec9ef37f
             <div class="clearfix"> </div>
						 <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              {!! Form::submit('Add category', ['class' => 'btn btn-primary']) !!}
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
				{!! Form::close() !!}

 	<!---->

@endsection
