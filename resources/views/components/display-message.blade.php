@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show mx-auto p-4" role="alert" style="max-width: 600px;">
        <strong> {{ session('message') }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
