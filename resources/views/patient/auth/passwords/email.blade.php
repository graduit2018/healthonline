@extends('patient.layouts.auth.layout')

@section('title')
Patient | Reset Password
@endsection

@section('content-header')
<b>Patient</b>ResetPassword
@endsection

@section('content')
<form action="{{ route('patient.password.email') }}" method="post">
    @csrf

    <div class="form-group has-feedback">
        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control" name="email" value="{{ old('email') }}"
            required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    @if ($errors->has('email'))
    <span class="help-block text-red">
        <strong>{{ $errors->first('email') }}</strong>
    </span> @endif

    <div class="row">
        <div class="col-xs-4">
        </div>
        <!-- /.col -->
        <div class="col-xs-8">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Send Password Reset Link') }}</button>
        </div>
        <!-- /.col -->
    </div>
</form>
@endsection
