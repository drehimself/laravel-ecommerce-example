<header>
    <div class="top-nav container">
      <div class="top-nav-left">
          <div class="logo"><a href="/">{{ __('site.title') }}</a></div>
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          <!-- {{ menu('main', 'partials.menus.main') }} -->
          @endif
      </div>
      <div class="top-nav-right">
          @if (! (request()->is('checkout') || request()->is('guestCheckout')))
          @include('partials.menus.main-right', ['items' => []])
          @endif
      </div>
    </div> <!-- end top-nav -->
</header>
