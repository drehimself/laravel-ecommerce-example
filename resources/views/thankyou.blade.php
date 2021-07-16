@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

    <div class="thank-you-section">
        <h1>{{ __('site.Thankyoufor1') }} <br> {{ __('site.YourOrder')  }} <br> {{ __('site.Thankyoufor2') }} !</h1>
        <p>{{ __('site.AConfirmationEmailWasSent')  }} </p>
        <div class="spacer"></div>
        <div>
            <a href="{{ url('/') }}" class="button">{{ __('site.HomePage')  }}</a>
        </div>
    </div>




@endsection
