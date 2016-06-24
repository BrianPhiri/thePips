@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="index.html">Category</a>
		<i class="fa fa-angle-right"></i>
	    <span>Category</span>
    </h2>
</div>

<div class="validation-system">

	<div class="validation-form">
<!---->
	<div class="clearfix"> </div>
	<div class="content-top">
		<!-- Small modal -->
		<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#mypdfmodel">Download pdf report</button> -->
		<a href="{{URL::asset('category-pdf')}}" class="btn btn-success">Download pdf report</a>

		<div class="modal fade" id="mypdfmodel" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="" style="padding: 10px;">
						{{Form::open(array('action' => 'PdfsController@downloadCategoryPdf'))}}
							<div class="form-group">
								<label>Form: </label>
								<input type="datetime" class="form-control" name="date_from" value="">
							</div>
							<div class="form-group">
								<label>To: </label>
								<input type="datetime" class="form-control" name="date_to" value="">
							</div>
							{{ Form::submit('Generate PDF',['class' => 'btn btn-warning'])}}
						{{ Form::close()}}
		      </div>
		    </div>
		  </div>
		</div>
    <table class="table table-hover" id="myTable">
        <thead>
            <tr>
                <td><b>Name</b></td><td><b>Description</b></td><td><b>Action</b></td><td></td><td></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $categories as  $category)
            <tr>
								<td>{{ $category->name }}</td><td>{{ substr($category->description,0,90).'...' }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $category->id }}">View</button></td>
                <td><a href="category/{{$category->id }}/edit" class="btn btn-warning">Edit</a></td>
								<td>
									<form action="category/{{$category->id}}" method="DELETE" onsubmit="return confirm('Are you sure you want to remove this category?')">
									<input class="btn btn-danger" type="submit" name="delete" value="Remove">
									</form>
									</td>
								<!-- Modal -->
								<div class="modal fade" id="myModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel{{ $category->id }}">Category view</h4>
											</div>
											<div class="modal-body">
												<label>Name : </label> <p>{{ $category->name }}</p> <br>
												<label>Decription : </label> <p>{{ $category->description }}</P>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Done Viewing</button>
											</div>
										</div>
									</div>
								</div>
								<!-- end modal -->
						</tr>
            @endforeach
        </tbody>
    </table>
		{!! $categories->links() !!}
</div>
	<div class="clearfix"> </div>

<!---->
</div>

</div>

@endsection
