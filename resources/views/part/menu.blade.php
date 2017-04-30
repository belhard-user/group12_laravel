@inject('menu', 'App\Services\MenuService')
<nav>
    <ul>
        @foreach($menu->getMenuItems() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</nav>