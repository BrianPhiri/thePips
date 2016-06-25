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
    <table id="myTable" class="table table-hover">
        <thead>
            <tr>
                <td><b>Product Number<b></td><td><b>Name</b></td><td><b>Description</b></td><td><b>Action</b></td><td></td><td></td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $products as  $product)
            <tr>
							  <td>{{ $product->id }}</td><td>{{ $product->name }}</td><td style="word-break: break-all; word-wrap:break-word;">{{  substr($product->description,0,50).'...' }}</td>
								<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $product->id }}">View</button></td>
                <td><a href="product/{{$product->id }}/edit" class="btn btn-warning">Edit</a></td>
								<td>
									<form action="product/{{ $product->id }}" method="DELETE" onsubmit="return confirm('Are you sure you want to delete this product?')">
										<input class="btn btn-danger" type="submit" name="delete" value="Remove">
									</form>
								</td>

								<!-- Modal -->
								<div class="modal fade" id="myModal{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel{{ $product->id }}">Product view</h4>
											</div>
											<div class="modal-body">
												<img src="{{URL::asset('image_uploads')}}/{{$product->image }}" alt="{{ $product->name }}" style="width: 100%; height: 300px;" class="img-responsive" >
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
