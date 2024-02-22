<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('articles.index') }}">Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('articles.create') }}">Inserisci articolo</a>
                </li>
            </ul>



            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Categorie
                </button>
                <ul class="dropdown-menu">
                    
                    @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{ route('articles.byCategory', $category) }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            @auth
                <form class="mx-4" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>

            @endauth

            @guest
                <div class="dropdown mx-4">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Autenticati
                    </button>
                    <ul class="dropdown-menu">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ route('register') }}">Registrazione</a>
                        </li>

                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>
