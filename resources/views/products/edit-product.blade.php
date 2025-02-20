<x-layout>
    <x-display-errors />
    <x-display-message />
    <div class="container-fluid py-5">
        
        <!-- Pulsante per tornare alla lista dei prodotti -->
        <div class="">
            <a href="{{route('index.product')}}" class="btn btn-info border-black btn-lg ">Torna ai Prodotti</a>
        </div>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-info text-white text-center">
                        <h2 class="my-2">Modifica Prodotto</h2>
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('update.product', compact('product')) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
    
                            <!-- Nome Prodotto -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Nome</label>
                                <input type="text" name="name" value="{{ $product->name }}" 
                                       class="form-control rounded-pill" id="name" required>
                            </div>
    
                            <!-- Descrizione -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Descrizione</label>
                                <textarea name="description" class="form-control rounded-3" 
                                          id="description" rows="5" required>{{ $product->description }}</textarea>
                            </div>
    
                            <!-- Prezzo -->
                            <div class="mb-3">
                                <label for="price" class="form-label fw-bold">Prezzo</label>
                                <div class="input-group">
                                    <input type="text" name="price" value="{{ $product->price }}" 
                                           class="form-control rounded-start-pill" id="price" required>
                                    <span class="input-group-text bg-white border rounded-end-pill">€</span>
                                </div>
                            </div>
    
                            <!-- Immagine -->
                            <div class="mb-3">
                                <label for="image" class="form-label fw-bold">Immagine</label>
                                    <div class="mb-3 text-center">
                                        <img src="{{ Storage::url($product->image) }}" alt="Immagine attuale"
                                            class="img-thumbnail rounded-3 shadow" width="150">
                                    </div>
                                <input type="file" name="image" id="image"
                                    class="form-control rounded-pill" accept="image/*">
                            </div>
    
                            <!-- Pulsante Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-info btn-lg rounded-pill">Modifica Prodotto</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
</x-layout>
