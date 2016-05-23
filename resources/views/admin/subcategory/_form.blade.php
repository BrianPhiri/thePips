<div class="vali-form">
  <div class="clearfix"> </div>
  <!--  -->
   <div class="col-md-12 form-group2">
     {!! Form::label('catname', 'Category') !!}
     <select name="category_id" id="category" class="form-control">
          <option>Select Category this subcategory belongs to</option>
        @foreach($categories as $category)
          <option value="{{ $category->id}}">{{$category->name}}</option>
        @endforeach
      </select>

 </div>
<!--  -->
  <div class="clearfix"> </div>
  <div class="col-md-6 form-group1">
    {!! Form::label('subcatname', 'Subcategory Name') !!}
    {!! Form::text('name', null, ['placeholder' => 'Subcategory Name','required' => '']) !!}
  </div>
   <div class="clearfix"> </div>
   <div class="col-md-6 form-group1">
    {!! Form::label('subcategoryDes', 'Subcategory Description') !!}
    {!! Form::textarea('description', null, ['placeholder' => 'please write down a brife summary of the Subcategory','required' => '']) !!}
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
