@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="">Product</a>
		<i class="fa fa-angle-right"></i>
	    <span>Products</span>
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
                <td><b>Product</b> Number</td><td><b>Name</b></td><td><b>Description</b></td><td><b>Action</b></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $products as  $product)
            <tr>
							  <td>{{ $product->id }}</td><td>{{ $product->name }}</td><td style="word-break: break-all; word-wrap:break-word;">{{  substr($product->description,0,50).'...' }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $product->id }}">View</button></td>
                <td><a href="product/{{$product->id }}/edit" class="btn btn-warning">Edit</a></td>
								<td><a href="product/{{$product->id }}" class="btn btn-danger">Remove</a></td>


								<!-- Modal -->
								<div class="modal fade" id="myModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel{{ $product->id }}">Product view</h4>
											</div>
											<div class="modal-body">
												<label>Name : </label> <p>{{ $product->name }}</p> <br>
												<label>Category: </label>
												<label>Price : </label> <p>{{ $product->price}}</p>
												<label>Decription : </label> <p>{{ $product->description }}</P>
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
		{!! $products->links() !!}
</div>
	<div class="clearfix"> </div>

<!---->
</div>

</div>
@endsection
