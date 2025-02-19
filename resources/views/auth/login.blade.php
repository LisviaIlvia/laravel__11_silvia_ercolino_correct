<x-layout>
    <header class="container-fluid">
        <div class="row  align-items-center">
            <div class="col-12 my-5">
                <h1 class="text-giallo display-1 text-center">Accedi</h1>
                
            </div>
        </div>
    </header>
   <x-display-errors/>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-4 shadow rounded-4" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="email">
                    </div> 
                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>