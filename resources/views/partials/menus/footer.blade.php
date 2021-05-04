<ul>
    @foreach($items as $menu_item)
        @if ($menu_item->title === 'ما را در شبکه های اجتماعی دنبال کنید')
            <li>{{ $menu_item->title }}</li>
        <li><a href="{{ $menu_item->link() }}"><i class="fa {{ $menu_item->title }}"></i></a></li>
        
        @endif
    @endforeach
</ul>
