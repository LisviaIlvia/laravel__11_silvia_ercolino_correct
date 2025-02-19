<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="immagine prodotto">
    <div class="card-body">
      <h4 class="card-name">{{$product->name}}</h4>
      {{-- <h6 class="card-description">{{$product->description}}</h6> --}}
      <h6 class="card-price my-4">{{$product->price}}<span>€</span></h6>
      <a href="{{route('show.product', compact('product'))}}" class="btn-custom ">Scopri di più</a>
    </div>
</div>