@extends('layout')

@section('title', 'Login')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div class="auth-left">
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
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
            <h2>{{ __('site.returningCustomer') }}</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required>

                <div class="login-container">
                    <button type="submit" class="auth-button">{{ __('site.login') }}</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('site.rememberMe') }}
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}">
                {{ __('site.forgotYourPassword') }}?
                </a>

            </form>
        </div>

        <div class="auth-right">
            <h2>{{ __('site.newCustomer') }}</h2>
            <div class="spacer"></div>
            <p><strong>{{ __('site.saveTimeNow') }}.</strong></p>
            <p>{{ __('site.YouDontNeedAnAccountToCheckout') }}.</p>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow">{{ __('site.continueAsGuest') }}</a>
            <div class="spacer"></div>
            &nbsp;
            <div class="spacer"></div>
            <p><strong>{{ __('site.saveTimeLater') }}.</strong></p>
            <p>{{ __('site.createAnAccountForFastCheckoutAndEasyAccessToOrderHistory') }}.</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow">{{ __('site.createAccount') }}</a>

        </div>
    </div>
</div>
@endsection
