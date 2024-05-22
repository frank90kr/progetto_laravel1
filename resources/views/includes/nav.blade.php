<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="/">Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('products.index') }}">List </a></li>
                        <li><a class="dropdown-item" href="{{ route('products.create') }}">Add </a></li>
                    </ul>
                </li>
               
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            Dashboard
                        </a>
                    </li>
                @endauth

                {{-- @guest
                    se utente non loggato
                @endguest --}}
            </ul>

           

            <ul class="navbar-nav mb-2 mb-lg-0">
                @auth
                    {{-- se utente loggato --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    {{-- altrimenti, se l'utente non è loggato --}}
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            Log in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            Register
                        </a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
