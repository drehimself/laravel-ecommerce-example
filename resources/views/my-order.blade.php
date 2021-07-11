@extends('layout')

@section('title', __('site.user_page.order_details'))

@section('extra-css')
    <link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
@endsection

@section('content')

    @component('components.breadcrumbs')
        <a href="/">{{ __("site.home") }}</a>
        <i class="fa fa-chevron-right breadcrumb-separator"></i>
        <span>{{ __('site.user_page.order_details') }}</span>
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

    <div class="products-section my-orders container">
        <div class="sidebar">

            <ul>
              <li><a href="{{ route('users.edit') }}">{{ __('site.user_page.my_profile') }}</a></li>
              <li class="active"><a href="{{ route('orders.index') }}">{{ __('site.user_page.my_orders') }}</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="my-profile">
            <div class="products-header">
                <h1 class="stylish-heading">{{__('site.user_page.order_id')}}: {{ $order->id }}</h1>
            </div>

            <div>
                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                <div class="uppercase font-bold">{{__('site.user_page.order_placed_at')}}</div>
                                <div>{{ presentDate($order->created_at) }}</div>
                            </div>
                            <div>
                                <div class="uppercase font-bold">{{ __('site.user_page.order_id') }}</div>
                                <div>{{ $order->id }}</div>
                            </div><div>
                                <div class="uppercase font-bold">{{__('site.user_page.order_total')}}</div>
                                <div>{{ presentPrice($order->billing_total) }}</div>
                            </div>
                        </div>
                        <div>
                            <div class="order-header-items">
                                <div><a href="#">{{__('site.user_page.order_invoice')}}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="order-products">
                        <table class="table" style="width:50%">
                            <tbody>
                                <tr>
                                    <td>{{ __('site.name') }}</td>
                                    <td>{{ $order->user->name }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('site.address') }}</td>
                                    <td>{{ $order->billing_address }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('site.city') }}</td>
                                    <td>{{ $order->billing_city }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('site.subTotal') }}</td>
                                    <td>{{ presentPrice($order->billing_subtotal) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('site.tax') }}</td>
                                    <td>{{ presentPrice($order->billing_tax) }}</td>
                                </tr>
                                <tr>
                                    <td>{{ __('site.total') }}</td>
                                    <td>{{ presentPrice($order->billing_total) }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div> <!-- end order-container -->

                <div class="order-container">
                    <div class="order-header">
                        <div class="order-header-items">
                            <div>
                                {{__('site.user_page.order_items')}}
                            </div>

                        </div>
                    </div>
                    <div class="order-products">
                        @foreach ($products as $product)
                            <div class="order-product-item">
                                <div><img src="{{ asset($product->image) }}" alt="Product Image"></div>
                                <div>
                                    <div>
                                        <a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a>
                                    </div>
                                    <div>{{ presentPrice($product->price) }}</div>
                                    <div>{{__('site.user_page.order_quantity')}}: {{ $product->pivot->quantity }}</div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div> <!-- end order-container -->
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
