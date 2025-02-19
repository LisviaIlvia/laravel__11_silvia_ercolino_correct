@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade  show mx-auto p-4" role="alert" style="max-width: 600px;">
        <strong>Oops! Qualcosa è andato storto:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
