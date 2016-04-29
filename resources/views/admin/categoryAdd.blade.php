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
<<<<<<< HEAD
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
                
				<div class="vali-form">
					<label for="selector1" class="col-sm-2 control-label">Category Name</label>
					<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
					<option>Beds</option>
					<option>Desks</option>
					<option>Drawers</option>
					<option>Seats</option>
                    <option>Sets</option>
                    <option>Shelves</option>
                    <option> Sofa Sets</option>
                    <option>Storage</option>
					<option>Tables</option>
					</select></div>
				</div>
				
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Description </label>
              <textarea  placeholder="Your Comment..." required="">Type description.....</textarea>
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
=======

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


>>>>>>> 52e1b2e8ac287334aef84bd982a4e9dfec9ef37f
 	<!---->

 @endsection
