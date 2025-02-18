
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
                    <a class="nav-link" href="{{route('create.article')}}">Aggiungi Articolo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
