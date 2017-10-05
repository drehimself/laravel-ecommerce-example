@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="#">Home</a>
            <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div> <!-- end breadcrumbs -->

    <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desktops</a></li>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">TVs</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Appliances</a></li>
            </ul>

            <h3>By Price</h3>
            <ul>
                <li><a href="#">$0 - $700</a></li>
                <li><a href="#">$700 - $2500</a></li>
                <li><a href="#">$2500+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div class="products text-center">
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
            <div class="product">
                <a href="#"><img src="/img/macbook-pro.png" alt="product"></a>
                <a href="#"><div class="product-name">MacBook Pro</div></a>
                <div class="product-price">$2499.99</div>
            </div>
        </div> <!-- end products -->
    </div>


@endsection
