<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('home')) active @endif" href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (request()->routeIs('comics.index')) active @endif" href="{{ route('comics.index') }}">
                    Comics list
                </a>
            </li>
        </ul>

    </div>
</nav>
