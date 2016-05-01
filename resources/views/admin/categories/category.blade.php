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
                <td>Name</td><td>Description</td><td>Action</td>
            </tr>
        </thead>
				<hr>
        <tbody>
            @foreach( $categories as  $category)
            <tr>
                <td>{{ $category->category_name }}</td><td>{{ $category->category_description }}</td><td><a href="category/{{$category->id }}/edit" class="btn btn-warning">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
	<div class="clearfix"> </div>

<!---->
</div>

</div>
@endsection
