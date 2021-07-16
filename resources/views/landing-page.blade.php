<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ __('site.title') }}</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRoboto:300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body dir="rtl">
        <div id="app">
            <header class="with-background">
                <div class="top-nav container">
                    <div class="top-nav-left">
                        <div class="logo">{{ __('site.title') }}</div>
                        <!-- {{ menu('main', 'partials.menus.main') }} -->
                    </div>
                    <div class="top-nav-right">
                        @include('partials.menus.main-right', ['items' => $items])
                    </div>
                </div> <!-- end top-nav -->
                <div class="hero container">
                    <div class="hero-copy">
                        <h1>{{ __('site.mainpage.header.title') }}</h1>
                        <p>{{ __('site.mainpage.header.description') }}</p>
                        <div class="hero-buttons">
                            <a href="#" class="button button-white">{{ __('site.mainpage.header.button1') }}</a>
                            <a href="#" class="button button-white">{{ __('site.mainpage.header.button2') }}</a>
                        </div>
                    </div> <!-- end hero-copy -->

                    <div class="hero-image">
                        <img src="img/macbook-pro-laravel.png" alt="hero image">
                    </div> <!-- end hero-image -->
                </div> <!-- end hero -->
            </header>

            <div class="featured-section">

                <div class="container">
                    <h1 class="text-center">{{ __('site.mainpage.body.title') }}</h1>

                    <p class="section-description">{{ trans('site.mainpage.body.description') }}</p>
<!-- 
                    <div class="tabs">
                        <div class="tab">
                            پیشنهاد شده
                        </div>
                        <div class="tab">
                            موجود
                        </div>
                    </div> -->

                    <div class="products text-center">
                        @foreach ($products as $product)
                            <div class="product">
                                <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ productImage($product->image) }}" alt="product"></a>
                                <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a>
                                <div class="product-price">{{ $product->presentPrice() }} تومان</div>
                            </div>
                        @endforeach

                    </div> <!-- end products -->

                    <div class="text-center button-container">
                        <a href="{{ route('shop.index') }}" class="button">{{ __('site.mainpage.body.loadmore') }}</a>
                    </div>

                </div> <!-- end container -->

            </div> <!-- end featured-section -->

            <blog-posts></blog-posts>

            @include('partials.footer')

        </div> <!-- end #app -->
        <script src="js/app.js"></script>
        <script src="/lang-{{ app()->getLocale() }}.js"></script>


    </body>
</html>
