@extends('layouts.adminlayout')
@section('content')

<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form>
         	<div class="vali-form">
         	 <div class="col-md-6 form-group1">
              <label class="control-label">Image Upload</label>
              <img src="..." alt="..." class="img-thumbnail">
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-6 form-group1">
              <label class="control-label">Product Name</label>
              <input type="text" placeholder="ProductName" required="">
            </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Product Price</label>
              <input type="text" placeholder=" Product Price" required="">
               <p class=" hint-block">Price values from 1-***</p>
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Category</label>
            <select>
            	<option value="">Category</option>
            	<option value="">Category1</option>
            	<option value="">Category2</option>
            	<option value="">Category3</option>
            	<option value="">Category4</option>
            </select>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->

@endsection