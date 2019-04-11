@extends('patient.layouts.auth.layout')

@section('title')
Patient | Reset Password
@endsection

@section('content-header')
<b>Patient</b>ResetPassword
@endsection

@section('content')
<form action="{{ route('patient.password.update') }}" method="post">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group has-feedback">
        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control" name="email" value="{{ old('email') }}"
            autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    @if ($errors->has('email'))
    <span class="help-block text-red">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif

    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    @if ($errors->has('password'))
    <span class="help-block text-red">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif

    <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
    </div>

    <div class="row">
        <div class="col-xs-4">
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Reset Password') }}</button>
        </div>
        <!-- /.col -->
    </div>
</form>
@endsection
