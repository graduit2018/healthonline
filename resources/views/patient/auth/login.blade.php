@extends('patient.layouts.auth.layout')

@section('title')
Patient | Log in
@endsection

@section('content-header')
<b>Patient</b>Login
@endsection

@section('content')
<form action="{{ route('patient.login') }}" method="post">
    @csrf

    <div class="form-group has-feedback">
        <input id="email" type="email" placeholder="{{ __('E-Mail Address') }}" class="form-control" name="email" value="{{ old('email') }}"
            required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input id="password" type="password" placeholder="{{ __('Password') }}" class="form-control" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    @if ($errors->has('email'))
    <span class="help-block text-red">
        <strong>{{ $errors->first('email') }}</strong>
    </span> @endif @if ($errors->has('password'))
    <span class="help-block text-red">
        <strong>{{ $errors->first('password') }}</strong>
    </span> @endif

    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                </label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<a href="{{ route('patient.register') }}" class="text-center">Register a new membership</a>
<br>
<a href="{{ route('patient.password.request') }}" class="text-center">Forgot your password?</a>
@endsection
