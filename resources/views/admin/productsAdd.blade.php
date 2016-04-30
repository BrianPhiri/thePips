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
							 <select name="category" id="category" class="form-control">
							 		@foreach($categories as $category)
						        <option value="{{$category->category_id}}">{{$category->category_name}}</option>
									@endforeach
						    </select>

					 </div>
					 <!--  -->
					 <div class="clearfix"> </div>
					 <!--  -->
						<div class="col-md-12 form-group2">
							{!! Form::label('subcatname', 'Sub-Category') !!}
							<select name="subcategory" id="subcategory" class="form-control">
									 <option value=""></option>
							 </select>
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
             
             <div class="clearfix"> </div>
			 <div class="clearfix"> </div>

            <div class="col-md-12 form-group">
              {!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
				{!! Form::close() !!}

 	<!---->
<script>
		$('#category').on('change', function(e){
			console.log(e);
			var category_number = e.target.value;
			$.get('/subcategory?category_number='+ category_number, function(data){
				// console.log(data);
				$('#subcategory').empty();
				$.each(data, function(){
					$('#subcategory').append('<options value="'+subcatObj.id +'">'+subcatObj.name+'</option>');
				});
			});
		});
</script>

@endsection
