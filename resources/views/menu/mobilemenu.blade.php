<ul id="menu-top" class="menu">

	 @foreach ($menus as $menu)
	            @include('menu.partials.mobile-item', ['menu' => $menu])
							     

    @endforeach

</ul>