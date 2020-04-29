<nav class="navbar navbar-toggleable-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Katalog Whisky</a>

    <ul class="nav d-flex justify-content-between">
        <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
            <a class="nav-link" href="/">Produkty</a>
        </li>
        @auth 
        <li class="nav-item  {{Request::is('/sklepik/create') ? 'active' : ''}}">
            <a class="nav-link" href="/sklepik/create">Nowy</a>
        </li>
        @endauth
        <li class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
         </li>
    </ul>

</nav>
