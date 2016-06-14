<div class="vali-form">
  <div class="col-md-6 form-group1">
    {!! Form::label('catname', 'Category Name') !!}
    {!! Form::text('name', null, ['placeholder' => 'Category Name','required' => '']) !!}
  </div>
  <div class="clearfix"> </div>
  </div>
    <div class="clearfix"> </div>
  <div class="col-md-12 form-group1 ">
    {!! Form::label('catdes', 'Category Description') !!}
    {!! Form::textarea('description', null, ['placeholder' => 'Category Description...','required' => '']) !!}
  </div>
  <div class="clearfix"> </div>
</div>
  <div class="clearfix"> </div>

  <div class="col-md-12 form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary']) !!}
    <button type="reset" class="btn btn-default">Cancel</button>
  </div>
<div class="clearfix"> </div>
