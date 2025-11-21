<form action="{{ route('candidates.index') }}" method="GET" class="mb-4">
    <div class="row">
        <div class="col-md-4">
            <input type="text" name="cne" class="form-control" placeholder="CNE" value="{{ request('cne') }}">
        </div>
        <div class="col-md-4">
            <input type="text" name="nom" class="form-control" placeholder="Nom" value="{{ request('nom') }}">
        </div>
        <div class="col-md-4">
            <input type="text" name="prenom" class="form-control" placeholder="Prénom" value="{{ request('prenom') }}">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Rechercher</button>
        </div>
    </div>
</form>
