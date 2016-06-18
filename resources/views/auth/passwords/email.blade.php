@extends('layouts.master')

<!-- Main Content -->
@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
                <div class="panel-body">
                    

                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-envelope"></i>Send Password Reset Link
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="login_sec">
     <div class="container">
         <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">Password Resets</li>
         </ol>
         <h2>Reset your password</h2>
         <div class="col-md-6 log">
                 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                 <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                        {!! csrf_field() !!}
                     <h5>E-Mail:</h5>
                     <input type="email" name="email" value="{{ old('email') }}" class="mail">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                     <button type="submit" class="acount-btn"><i class="fa fa-btn fa-envelope"></i> Send Password Reset Link</button><br>
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
@endsection
