@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="index.html">Subcategory</a>
		<i class="fa fa-angle-right"></i>
	    <span>Subcategory</span>
    </h2>
</div>

<div class="validation-system">

	<div class="validation-form">
<!---->
	<div class="clearfix"> </div>
	<div class="content-top">
		<a href="{{URL::asset('subcategory-pdf')}}" class="btn btn-success">Download pdf report</a>
    <table class="table table-hover" id="myTable">
        <thead>
            <tr>
                <td><b>Name</b></td><td><b>Description</b></td><td><b>Action</b></td><td></td><td></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $subcategories as  $subcategory)
            <tr>
                <td>{{ $subcategory->name }}</td><td>{{  substr($subcategory->description,0,90).'...' }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $subcategory->id }}">View</button></td>
								<td><a href="subcategory/{{$subcategory->id }}/edit" class="btn btn-warning">Edit</a></td>
								<td>
									<form action="subcategory/{{$subcategory->id}}" method="DELETE" onsubmit="return confirm('Are you sure you want to remove this subcategory?')">
										<input class="btn btn-danger" type="submit" name="delete" value="Remove">
									</form>
								</td>

								<!-- Modal -->
								<div class="modal fade" id="myModal{{ $subcategory->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								        <h4 class="modal-title" id="myModalLabel{{ $subcategory->id }}">Subcategory view</h4>
								      </div>
								      <div class="modal-body">
								        <label>Name : </label> <p>{{ $subcategory->name }}</p> <br>
												<label>Parent category: </label> <br>
												<label>Decription : </label> <p>{{ $subcategory->description }}</P>

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
		{!! $subcategories->links() !!}
</div>
	<div class="clearfix"> </div>

<!---->
</div>

</div>
@endsection
