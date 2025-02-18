<x-layout>
    <div class="container">
        <h1 class="text-center display-4 title"> I Nostri Articoli </h1>
        <div class="row justify-content-center mt-5">
            @foreach ($articles as $article)
            <div class="col-12 col-md-4 mb-4">
                <x-card-article :article=$article />
            </div>
                @endforeach
        </div>
    </div>
    
</x-layout>