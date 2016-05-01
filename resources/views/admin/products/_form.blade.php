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
          <option value="{{ $category->id}}">{{$category->category_name}}</option>
        @endforeach
      </select>

 </div>
 <!--  -->
 <div class="clearfix"> </div>
 <!--  -->
  <div class="col-md-12 form-group2">
    {!! Form::label('subcatname', 'Sub-Category') !!}
    <select name="sub_category_id" id="subcategory" class="form-control">
      <option value="">Select Category</option>
     </select>
</div>
<!--  -->
  <div class="clearfix"> </div>
  <div class="col-md-6 form-group1">
    {!! Form::label('catname', 'Product Name') !!}
    {!! Form::text('product_name', null, ['placeholder' => 'Product Name','required' => '']) !!}
  </div>
  <div class="col-md-12 form-group1">
    {!! Form::label('prodprice', 'Product Price') !!}
    {!! Form::text('product_price', null, ['placeholder' => 'Product Price','required' => '']) !!}
     <p class=" hint-block">Price values from 1-***</p>
  </div>
   <div class="clearfix"> </div>
   <div class="clearfix"> </div>
   <div class="col-md-6 form-group1">
    {!! Form::label('productDes', 'Product Description') !!}
    {!! Form::textarea('product_description', null, ['placeholder' => 'please write down a brife summary of the product','required' => '']) !!}
   </div>
   <div class="clearfix"> </div>
   <div class="clearfix"> </div>
<div class="clearfix"> </div>

  <div class="col-md-12 form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    <button type="reset" class="btn btn-default">Reset</button>
  </div>
<div class="clearfix"> </div>

<!-- script for dependant dropdown -->
<script>
		$('#category').on('change', function(e){
			console.log(e);
			var category_number = e.target.value;
			$.get("{{ URL::asset('/subcategory?category_number=') }}"+ category_number, function(data){
				 console.log(data);
				$('#subcategory').empty();
				 var appenddata = "";
				$.each(data, function(index, subcatObj){
					appenddata += "<option value = '"  +subcatObj.sub_category_id + " '>" +subcatObj.name+ " </option>";
				});
				$('#subcategory').html(appenddata);
			});
		});
</script>
