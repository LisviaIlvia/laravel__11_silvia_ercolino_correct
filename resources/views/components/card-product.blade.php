<div class="card" style="width: 22rem;"> 
  <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="immagine prodotto">
  <div class="card-body">
      <h4 class="card-name">{{ $product->name }}</h4>
      <h6 class="card-price my-4">{{ $product->price }}<span>€</span></h6>
      <div class="d-flex justify-content-center justify-content-between">
          <a href="{{ route('show.product', compact('product')) }}" class="btn btn-info">Scopri di più</a>
          @auth
          <a href="{{ route('edit.product', compact('product')) }}" class="btn btn-warning ">Modifica</a>
          <form action="{{ route('destroy.product', compact('product')) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Elimina</button>
          </form>
          @endauth
      </div>
  </div>
</div>
