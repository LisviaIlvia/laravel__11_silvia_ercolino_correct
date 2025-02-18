<x-layout>
    <div class="container-fluid">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="text-center display-4 title pt-5"> Aggiungi Articolo </h1>
            </div>
        </div>
       
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form class="p-4 rounded-4 shadow bg-secondary-subtle mb-5" action="{{route('store.article')}}"
                    method="POST" enctype="multipart/form-data"> {{-- AGGIUNGO L'ENCTYPE PER POTER PASSARE DATI PIù COMPLESSI DI SEMPLICI STRINGHE O NUMERI NEL FORM --}}
                    @csrf

                    <!-- Titolo articolo -->
                    <div class="mb-3">
                        <label for="titolo" class="form-label fw-bold">Titolo</label>
                        <input name="title" type="text" value="{{old('title')}}" class="form-control" id="title"
                            placeholder="Inserisci il titolo">
                    </div>

                    <!-- Categoria  -->
                    <div class="mb-3">
                        <label for="categoria" class="form-label fw-bold">Categoria</label>
                        <input name="category" type="text" value="{{old('category')}}" class="form-control" id="category"
                            placeholder="Inserisci categoria">
                    </div>

                    <!-- Descrizione -->
                    <div class="mb-3">
                        <label for="descrizione" class="form-label fw-bold">Descrizione</label>
                        <input name="description" type="text" value="{{old('description')}}" class="form-control" id="description"
                            placeholder="Descrizione dell'articolo...">
                    </div>

                    {{-- Testo --}}
                    <div class="mb-3">
                        <label for="testo" class="form-label fw-bold">Testo</label>
                        <textarea name="text" id="text" class="form-control" rows="5" placeholder="Testo dell'articolo..." value="{{old('text')}}"> </textarea>
                    </div>

                    {{-- Immagine --}}
                    {{-- <div class="mb-3">
                        <label for="immagine" class="form-label fw-bold">Immagine</label>
                        <input name="image" type="file" id="image" class="form-control">
                    </div> --}}

                    <!-- Pulsante Submit -->
                    <div class="d-grid">
                        <button type="submit" class="btn-custom btn-lg">Aggiungi Articolo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   
</x-layout>