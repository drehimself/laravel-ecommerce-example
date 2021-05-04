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
            <h2>Forgot Password?</h2>
            <div class="spacer"></div>
            <form action="{{ route('password.email') }}" method="POST">
                {{ csrf_field() }}
                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <div class="login-container">
                    <button type="submit" class="auth-button">Send Password Reset Link</button>
                </div>


            </form>
        </div>
        <div class="auth-right">
            <h2>Forgotten Password Information</h2>
            <div class="spacer"></div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel dicta obcaecati exercitationem ut atque inventore cum. Magni autem error ut!</p>
            <div class="spacer"></div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel accusantium quasi necessitatibus rerum fugiat eos, a repudiandae tempore nisi ipsa delectus sunt natus!</p>
        </div>
    </div>
</div>
@endsection

