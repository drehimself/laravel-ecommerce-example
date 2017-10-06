@extends('layout')

@section('title', 'Product')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Macbook Pro</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">MacBook Pro</h1>
            <div class="product-section-subtitle">15 inch, 1TB SSD, 32GB RAM</div>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere facilis praesentium eaque et eum, illo repudiandae quia adipisci, soluta voluptatum. Reprehenderit inventore, sed a voluptatibus enim optio cum repellat?
            </p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas magni accusantium, sapiente dicta iusto ut dignissimos atque placeat tempora iste.</p>
        </div>
    </div> <!-- end product-section -->

    <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">
                <div class="might-like-product">
                    <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                    <div class="might-like-product-name">MacBook Pro</div>
                    <div class="might-like-product-price">$2499.99</div>
                </div>
                <div class="might-like-product">
                    <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                    <div class="might-like-product-name">MacBook Pro</div>
                    <div class="might-like-product-price">$2499.99</div>
                </div>
                <div class="might-like-product">
                    <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                    <div class="might-like-product-name">MacBook Pro</div>
                    <div class="might-like-product-price">$2499.99</div>
                </div>
                <div class="might-like-product">
                    <img src="{{ asset('img/macbook-pro.png') }}" alt="product">
                    <div class="might-like-product-name">MacBook Pro</div>
                    <div class="might-like-product-price">$2499.99</div>
                </div>
            </div>
        </div>
    </div>


@endsection
