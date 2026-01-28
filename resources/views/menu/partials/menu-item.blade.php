<li class="{{ $menu->children->count() ? 'has-children' : '' }}">
    <a href="{{ $menu->url ?? '#' }}">
        {{ $menu->title }}
    </a>

    @if ($menu->children->count())
        <ul class="sub-menu">
            @foreach ($menu->children as $child)
                @include('menu.partials.menu-item', ['menu' => $child])
            @endforeach
        </ul>
    @endif
</li>
