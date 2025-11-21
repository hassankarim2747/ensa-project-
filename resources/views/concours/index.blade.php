<!-- resources/views/concours/index.blade.php -->

@extends('layouts.app')

@section('title', 'Liste des Concours')

@section('content')
<body>
  
<div class="container my-5">
    <h1 class="text-center mb-4">Liste des Concours</h1>
    
    <a href="{{ route('concours.create') }}" class="btn btn-primary mb-3">Ajouter un Concours</a>
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered shadow-sm">
            <thead class="bg-dark text-white">
                <tr>
                    <th>nom</th>
                    <th>Date de Début</th>
                    <th>Date de Fin</th>
                    <th>conditions_admission</th>
                    <th>État</th>
                    <th>Actions</th>
                    
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
                        <a href="{{ route('concours.edit', $concour->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('concours.destroy', $concour->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
