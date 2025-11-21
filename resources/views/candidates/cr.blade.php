<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postuler à un concours</div>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                
                <div class="card-body">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postuler à un concours</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('C.store') }}">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="concours_id">Choisir un concours</label>
                            <select name="concours_id" id="concours_id" class="form-control" required>
                                <option value="">Sélectionnez un concours</option>
                                @foreach($concours as $concour)
                                    <option value="{{ $concour->id }}">{{ $concour->nom }}</option>
                                    <label for="concours">Concours</label>
    
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="cne">CNE</label>
                            <input type="text" class="form-control" id="cne" name="cne" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="prenom">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="telephone">Téléphone</label>
                            <input type="text" class="form-control" id="telephone" name="telephone" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="date_naissance">Date de Naissance</label>
                            <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" id="adresse" name="adresse" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="filiere">Filière souhaitée</label>
                            <input type="text" class="form-control" id="filiere" name="filiere" required>
                        </div>
                        <div class="form-group mb-3">
    <label for="concours">Concours</label>
    <input type="text" class="form-control" id="concours" name="concours" value="{{ isset($concour) ? $concour->nom : '' }}" required>
</div>


                        

                        <button type="submit" class="btn btn-primary">Soumettre ma candidature</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>