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
            <h2>{{ __('site.forgetpassword.forgetpassword') }}</h2>
            <div class="spacer"></div>
            <form action="{{ route('password.email') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('site.forgetpassword.email') }}" required autofocus>
                <div class="login-container">
                    <button type="submit" class="auth-button">{{ __('site.forgetpassword.sendPasswordResetLink') }}</button>
                </div>


            </form>
        </div>
        <div class="auth-right">
            <h2>{{ __('site.forgetpassword.forgottenPasswordInformation') }}</h2>
            <div class="spacer"></div>
            <p>{{ __('site.forgetpassword.text1') }}</p>
            <div class="spacer"></div>
            <p>{{ __('site.forgetpassword.text2') }}</p>
        </div>
    </div>
</div>
@endsection

