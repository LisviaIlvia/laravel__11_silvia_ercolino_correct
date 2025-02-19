<x-layout>
    <x-display-errors />
    <x-display-message />

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-danger text-white text-center">
                        <h2 class="my-2">Aggiungi Articolo</h2>
                    </div>
                    <div class="card-body bg-light">
                        <form action="{{ route('store.article') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Titolo articolo -->
                            <div class="mb-3">
                                <label for="title" class="form-label fw-bold">Titolo</label>
                                <input type="text" name="title" value="{{ old('title') }}" 
                                       class="form-control rounded-pill" id="title" required>
                            </div>

                            <!-- Categoria -->
                            <div class="mb-3">
                                <label for="category" class="form-label fw-bold">Categoria</label>
                                <input type="text" name="category" value="{{ old('category') }}" 
                                       class="form-control rounded-pill" id="category" required>
                            </div>

                            <!-- Descrizione -->
                            <div class="mb-3">
                                <label for="description" class="form-label fw-bold">Descrizione</label>
                                <input type="text" name="description" value="{{ old('description') }}" 
                                       class="form-control rounded-pill" id="description" required>
                            </div>

                            <!-- Testo -->
                            <div class="mb-3">
                                <label for="text" class="form-label fw-bold">Testo</label>
                                <textarea name="text" id="text" class="form-control rounded-3" 
                                          rows="5" required>{{ old('text') }}</textarea>
                            </div>

                            <!-- Immagine -->
                            <div class="mb-3">
                                <label for="image" class="form-label fw-bold">Immagine</label>
                                <input type="file" name="image" id="image" class="form-control rounded-pill" accept="image/*">
                            </div>

                            <!-- Pulsante Submit -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-danger btn-lg rounded-pill">Aggiungi Articolo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pulsante per tornare alla lista dei prodotti -->
        <div class="d-flex justify-content-center my-5">
            <a href="{{route('index.article')}}" class="btn border-black  btn-danger btn-lg ">Torna agli articoli</a>
        </div>
    </div>   
</x-layout>
