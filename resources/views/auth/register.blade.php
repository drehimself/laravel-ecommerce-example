@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
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
            <h2>{{ __('site.CreateAccount') }}</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ __('site.name') }}" required autofocus>

                <input id="mobile" type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" placeholder="{{ __('site.mobile') }}" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{ __('site.email') }}" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="{{ __('site.password') }}" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('site.confirmpassword') }}"
                    required>

                <div class="login-container">
                    <button type="submit" class="auth-button">{{ __('site.CreateAccount') }}</button>
                    <div class="already-have-container">
                        <p><strong>{{ __('site.Alreadyhaveanaccount') }}</strong></p>
                        <a href="{{ route('login') }}">{{ __('site.login') }}</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>{{ __('site.NewCustomer') }}</h2>
            <div class="spacer"></div>
            <p><strong>{{ __('site.Savetimenow') }}.</strong></p>
            <p>{{ __('site.Creatinganaccountwillallowyoutocheckoutfaster') }}</p>

            &nbsp;
            <div class="spacer"></div>
            <p><strong>{{ __('site.Savetimenow') }}.</strong></p>
            <p>{{ __('site.Creatinganaccountwillallowyoutocheckoutfaster') }}</p>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection
