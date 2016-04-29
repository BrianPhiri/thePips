@extends('layouts.adminlayout')
@section('content')
<div class="banner">
	<h2>
		<a href="index.html">Category</a>
		<i class="fa fa-angle-right"></i>
	    <span>Category</span>
    </h2>
</div>
<div class="content-top">
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Name</td><td>Description</td>
            </tr>
        </thead>
        <tbody>
            @foreach( $categories as  $category)
            <tr>
                <td>{{ $category->category_name }}</td><td>{{ $category->category_description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<<<<<<< HEAD
<!-- Add table -->

@endsection
=======
@endsection
>>>>>>> 52e1b2e8ac287334aef84bd982a4e9dfec9ef37f
