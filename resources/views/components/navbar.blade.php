
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{-- {{route('contact.us')}}--}}">Contattaci</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index.article')}}">I Nostri Articoli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index.product')}}">I Nostri Prodotti</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create.article')}}">Aggiungi Articolo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('create.product')}}">Aggiungi Prodotto</a>
                </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Accedi</a>
                </li>
                @endguest
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="#">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="nav-link" type="submit">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
