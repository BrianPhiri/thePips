@extends('layouts.master')
@section('content')
<!-- header -->
<!-- navbar for products -->
@include('homepage._navbar')
<!-- end navbar -->
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="{{URL::asset('/')}}">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>New user? <span> create an account </span></h2>
			 <!-- [if IE]
				< link rel='stylesheet' type='text/css' href='ie.css'/>
			 [endif] -->

			 <!-- [if lt IE 7]>
				< link rel='stylesheet' type='text/css' href='ie6.css'/>
			 <! [endif] -->
<!-- 			 <script>
				(function() {

				// Create input element for testing
				var inputs = document.createElement('input');

				// Create the supports object
				var supports = {};

				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;

				// Fallback for autofocus attribute
				if(!supports.autofocus) {

				}

				// Fallback for required attribute
				if(!supports.required) {

				}

				// Fallback for placeholder attribute
				if(!supports.placeholder) {

				}

				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}

			 })();
			 </script> -->
			 <div class="registration_form">
			 <!-- Form -->
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/account') }}">
                        {!! csrf_field() !!}
                    <div>

						<label>
							<select name="title" id="title" class="select_class">
							<i class="fa fa-btn fa-sign-in"></i>
					          <option>Select Title</option>
					        @foreach($title as $titles)
					          <option value="{{ $titles->id}}">{{$titles->title}}</option>
					        @endforeach
					      </select>
                                @if ($errors->has('title_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title_id') }}</strong>
                                    </span>
                                @endif
						</label>
					</div>
					<div>
						<label>
							<!-- <input placeholder="first name:" type="text" tabindex="1" required autofocus> -->
							<input type="text" placeholder="Name:" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
						</label>
					</div>
					<div>
						<label>
							<!-- <input placeholder="last name:" type="text" tabindex="2" required autofocus> -->
							<input type="email" name="email" value="{{ old('email') }}" placeholder="E-Mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
						</label>
					</div>
					<div>
						<label>
							<!-- <input placeholder="password" type="password" tabindex="4" required> -->
							<input type="password" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
						</label>
					</div>
					<div>
						<label>
							<!-- <input placeholder="retype password" type="password" tabindex="4" required> -->
							<input type="password" placeholder="Confirm Password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
						</label>
					</div>
					{!! app('captcha')->display(); !!}
					<button type="submit" class="acount-btn">
                                    <i class="fa fa-btn fa-sign-register"></i>
                                    Create Account
                                </button><br>
					<!-- <div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to mobilya.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div> -->
				</form>
				<!-- /Form -->
			 </div>
		 </div>
		 <div class="registration_left">
			 <h2>existing user</h2>
			 <div class="registration_form">
			 <!-- Form -->
				<form role="form" method="POST" action="{{ url('/login') }}">
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
					 <button type="submit" class="acount-btn">
                                    <i class="fa fa-btn fa-sign-in"></i>
                                    Login
                                </button><br>
					  <a href="password/reset">Forgot Password ?</a>
				 </form>
			 <!-- /Form -->
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- end registration -->
@include('homepage._footer')
@endsection
