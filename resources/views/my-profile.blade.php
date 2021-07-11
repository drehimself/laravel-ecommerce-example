@extends('layout')

@section('title', 'My Profile')

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">{{ __("site.home") }}</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ __('site.user_page.my_profile') }}</span>
    @endcomponent

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="products-section container">
        <div class="sidebar">

            <ul>
              <li class="active"><a href="{{ route('users.edit') }}">{{ __('site.user_page.my_profile') }}</a></li>
              <li><a href="{{ route('orders.index') }}">{{ __('site.user_page.my_orders') }}</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">{{ __('site.user_page.my_profile') }}</h1>
            </div>

            <div>
                <form action="{{ route('users.update') }}" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-control">
                        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="{{__('site.name')}}" required>
                    </div>
                    <div class="form-control">
                        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="{{__('site.email')}}" required>
                    </div>
                    <div class="form-control">
                        <input id="password" type="password" name="password" placeholder="{{__('site.password')}}">
                        <div>{{ __('site.user_page.keep_current_password') }}</div>
                    </div>
                    <div class="form-control">
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="{{__('site.confirmpassword')}}">
                    </div>
                    <div>
                        <button type="submit" class="my-profile-button">{{ __('site.user_page.update_profile') }}</button>
                    </div>
                </form>
            </div>

            <div class="spacer"></div>
        </div>
    </div>

@endsection

@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <!-- <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script> -->
@endsection
