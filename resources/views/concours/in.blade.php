<!DOCTYPE html>
<html>
<head>
    <title>Liste des Concours</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
   

    <div class="container my-5">
        <h1 class="text-center mb-4">Liste des Concours</h1>
        
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered shadow-sm">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Nom</th>
                        <th>Date de Début</th>
                        <th>Date de Fin</th>
                        <th>Conditions d'Admission</th>
                        <th>État</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($concours as $concour)
                    <tr class="bg-light">
                        <td>{{ $concour->nom }}</td>
                        <td>{{ $concour->date_debut }}</td>
                        <td>{{ $concour->date_fin }}</td>
                        <td>{{ $concour->conditions_admission }}</td>
                        <td>
                            <span class="badge {{ $concour->etat == 'ouvert' ? 'bg-success' : 'bg-danger' }}">
                                {{ ucfirst($concour->etat) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('C.create') }}" class="btn btn-sm btn-warning">postuler</a>
                           
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
