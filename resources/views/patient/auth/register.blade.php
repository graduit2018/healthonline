@extends('patient.layouts.auth.layout')

@section('title')
Patient | Registration Page
@endsection

@section('content-header')
<b>Patient</b>Register
@endsection

@section('content')
<p class="login-box-msg">Register a new membership</p>

<form action="{{ route('patient.register') }}" method="post">
    @csrf
    <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    @if ($errors->has('name'))
    <span class="help-block text-red">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span> @endif
    <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    @if ($errors->has('email'))
    <span class="help-block text-red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> @endif
    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    @if ($errors->has('password'))
    <span class="help-block text-red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span> @endif
    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>
    <div class="row">
        <div class="col-xs-8"></div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<a href="{{ route('patient.login') }}" class="text-center">I already have a membership</a>
@endsection
