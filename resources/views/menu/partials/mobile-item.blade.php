<li class="{{ $menu->children->count() ? 'menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-77' : '' }}">
    <a href="{{ $menu->url ?? '#' }}">
        {{ $menu->title }}
    </a>

    @if ($menu->children->count())
        <ul class="sub-menu">
            @foreach ($menu->children as $child)
                @include('menu.partials.mobile-item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>
