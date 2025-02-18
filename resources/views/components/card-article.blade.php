<div class="card" style="width: 18rem;">
    {{-- <img src="..." class="card-img-top" alt="..."> --}}
    <div class="card-body">
      <h4 class="card-title">{{$article->title}}</h4>
      <h6 class="card-category">{{$article->category}}</h6>
      <p class="card-description">{{$article->description}}</p>
      <a href="{{route('detail.article', ['id' => $article->id])}}" class="btn-custom ">Leggi di più</a>
    </div>
</div>