<x-layout>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Immagine -->
            <div class="col-md-5">
                {{-- <img src="" alt="Foto di " class="img-fluid rounded shadow-lg img"> --}}
            </div>
            <!-- Testo -->
            <div class="col-md-7">
                <h1 class="display-4">{{ $article->title }}</h1>
                <h3 class="text-muted mb-4">{{ $article->category }}</h3>
                <p class="lead">{{ $article->description }}</p>
                <div class="alert alert-info mt-4">
                    <p class="lead">{{ $article->text }}</p>
                </div>
                <a href="{{ route('index.article') }}" class="btn-custom mt-4">Torna agli articoli</a>
            </div>
        </div>
    </div>
</x-layout>
