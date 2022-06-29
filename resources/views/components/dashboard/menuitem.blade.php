
    <li class="menu-item {{request()->routeIs($route) ? 'active' : ''}}">
        <a href="{{ route($route) }}" class="menu-link ">
        <div data-i18n="Without menu">{{$name}}</div>
        </a>
    </li>




