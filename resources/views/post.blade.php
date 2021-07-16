@extends('layout')

@section('title', $post->title)

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">{{ __('site.home') }}</a>>>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span><a href="{{ route('shop.index') }}">{{ __('site.shop') }}</a></span>>>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ $post->title }}</span>
    @endcomponent

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                {{ __('site.blog.post') }} - {{ $post->id }}
                </div>

                <div class="panel-body">
                        <div class="alert alert-success">
                            {{ $post->title }}
                        </div>
                </div>

                <div class="panel-body">
                        <div class="alert alert-success">
                            {{ $post->excerpt }}
                        </div>
                </div>

                <div class="panel-body">
                        <div class="alert alert-success">
                            {{ $post->body }}
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
