
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>

                <!-- Contattaci -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Contattaci</a>
                </li>

                <!-- Chi Siamo -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Chi Siamo</a>
                </li>

                <!-- Dropdown Articoli -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownArticoli" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Articoli
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownArticoli">
                        <li><a class="dropdown-item" href="{{ route('index.article') }}">I Nostri Articoli</a></li>
                        @auth
                            <li><a class="dropdown-item" href="{{ route('create.article') }}">Aggiungi Articolo</a></li>
                        @endauth
                    </ul>
                </li>

                <!-- Dropdown Prodotti -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProdotti" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Prodotti
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownProdotti">
                        <li><a class="dropdown-item" href="{{ route('index.product') }}">I Nostri Prodotti</a></li>
                        @auth
                            <li><a class="dropdown-item" href="{{ route('create.product') }}">Aggiungi Prodotto</a></li>
                        @endauth
                    </ul>
                </li>
            </ul>

            <!-- Spingere il nome utente e il logout a destra -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-person"></i>{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="nav-link btn btn-link" type="submit"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
