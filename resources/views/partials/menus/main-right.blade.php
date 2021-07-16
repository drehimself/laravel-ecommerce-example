<ul>
    @guest
    <li><a href="{{ route('register') }}">{{ __('site.menu_titles.signup') }}</a></li>
    <li><a href="{{ route('login') }}">{{ __('site.menu_titles.login') }}</a></li>
    @else
    <li>
        <a href="{{ route('users.edit') }}">{{ __('site.menu_titles.myaccount') }}</a>
    </li>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            {{ __('site.menu_titles.logout') }}
        </a>
    </li>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endguest
    <li style="margin-right:38px !important"><a href="{{ route('cart.index') }}">{{ __('site.menu_titles.cart') }}
            @if (Cart::instance('default')->count() > 0)
            <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
            @endif
        </a></li>
    @if (count($items))
        @foreach($items as $menu_item)
        <li style="margin-left:38px !important">
            <a href="{{ $menu_item->link() }}" style="margin-left:38px !important">
                {{ $menu_item->title }}
                @if ($menu_item->title === __('site.cart'))
                    @if (Cart::instance('default')->count() > 0)
                        <span class="cart-count"><span>{{ Cart::instance('default')->count() }}</span></span>
                    @endif
                @endif
            </a>
        </li>
        @endforeach
    @endif
</ul>