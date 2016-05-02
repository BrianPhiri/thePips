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
    <table class="table table-hover">
        <thead>
            <tr>
                <td><b>Name</b></td><td><b>Description</b></td><td><b>Action</b></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $categories as  $category)
            <tr>
								<td>{{ $category->name }}</td><td>{{ substr($category->description,0,90).'...' }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $category->id }}">View</button></td>
                <td><a href="category/{{$category->id }}/edit" class="btn btn-warning">Edit</a></td>
								<td><a href="category/{{$category->id }}" class="btn btn-danger">Remove</a></td>
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
