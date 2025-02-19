<x-layout>
    <x-display-errors/>
    <x-display-message/>
        <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title pt-5"> Aggiungi Prodotto </h1>
            </div>
        </div>
       
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form class="p-4 rounded-4 shadow bg-secondary-subtle mb-5" action="{{route('store.product')}}"
                    method="POST" enctype="multipart/form-data"> {{-- AGGIUNGO L'ENCTYPE PER POTER PASSARE DATI PIù COMPLESSI DI SEMPLICI STRINGHE O NUMERI NEL FORM --}}
                    @csrf

                    <!-- Nome Prodotto -->
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nome</label>
                        <input name="name" type="text" value="{{old('name')}}" class="form-control" id="name"
                            placeholder="Inserisci il nome">
                    </div>

                    <!-- Descrizione -->
                    <div class="mb-3">
                        <label for="descrizione" class="form-label fw-bold">Descrizione</label>
                        <textarea name="description" cols="30" rows="10" class="form-control" id="description">{{old('description')}}</textarea>
                    </div>

                    {{-- Testo --}}
                    <div class="mb-3">
                        <label for="price" class="form-label fw-bold">Prezzo</label>
                        <div class="d-flex">
                            <input name="price" type="text" value="{{old('price')}}" class="form-control d-flex me-3" id="price">
                            <span>€</span>
                        </div>
                    </div>

                    {{-- Immagine --}}
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold">Immagine</label>
                        <input name="image" type="file" id="image" class="form-control" accept="image/*">
                    </div>

                    <!-- Pulsante Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn-custom btn-lg">Aggiungi Prodotto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</x-layout>