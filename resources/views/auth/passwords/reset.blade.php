@extends('layout')

@section('title', 'Reset Password')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{ session()->get('status') }}
            </div>
            @endif @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h2>{{ __('site.resetpassword.resetpassword') }}</h2>
            <div class="spacer"></div>
            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="{{ __('site.resetpassword.email') }}" required autofocus>

                <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('site.resetpassword.password') }}" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('site.resetpassword.confirmPassword') }}" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">{{ __('site.resetpassword.resetPasswordButton') }}</button>
                </div>

            </form>
        </div>
        <div class="auth-right">
            <h2>{{ __('site.resetpassword.resetPasswordTitle') }}</h2>
            <div class="spacer"></div>
            <p>{{ __('site.resetpassword.text1') }}</p>
            <div class="spacer"></div>
            <p>{{ __('site.resetpassword.text2') }}</p>
        </div>
    </div>
</div>
@endsection



