<x-layout>
    <div class="container py-5">
        <div class="row align-items-center">
            <!-- Immagine -->
            <div class="col-md-5">
                <img src="{{Storage::url($product->image)}}" alt="immagine articolo" class="img-fluid rounded shadow-lg img">
            </div>
            <!-- Testo -->
            <div class="col-md-7">
                <h1 class="display-4">{{ $product->name }}</h1>
                <h3 class="text-muted mb-4">{{ $product->price }} €</h3>
                <div class="alert alert-info mt-4">
                    <p class="lead">{{ $product->description }}</p>
                </div> 
                <a href="{{ route('index.product') }}" class="btn-custom mt-4">Torna ai prodotti</a>
            </div>
        </div>
    </div>
</x-layout>