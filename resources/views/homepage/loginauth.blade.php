@extends('layouts.master')
@section('content')
<!-- The code below illustrates the use of a partial view. -->
@include('homepage._navbar')
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="{{URL::asset('/')}}">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
		 <div class="col-md-6 log">
				 <p>Welcome, please enter the folling to continue.</p>
				 <p>If you have previously Login with us, <span>click here</span></p>
				 <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}
					 <h5>E-Mail:</h5>
					 <input type="email" name="email" value="{{ old('email') }}" class="mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					 <h5>Password:</h5>
					 <input type="password" name="password"><br>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
					 <button type="submit" class="acount-btn"><i class="fa fa-btn fa-sign-in"></i> Login</button><br>
					  <a href="#">Forgot Password ?</a>
				 </form>
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="account">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
@include('homepage._footer')
@endsection
