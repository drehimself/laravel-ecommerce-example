<div class="might-like-section">
    <div class="container">
        <h2>{{ __('site.youMightAlsolike') }}...</h2>
        <div class="might-like-grid">
            @foreach ($mightAlsoLike as $product)
                <a href="{{ route('shop.show', $product->slug) }}" class="might-like-product">
                    <img src="{{ productImage($product->image) }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name }}</div>
                    <div class="might-like-product-price">{{ $product->presentPrice() }} تومان</div>
                </a>
            @endforeach

        </div>
    </div>
</div>
