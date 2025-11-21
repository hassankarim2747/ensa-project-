@extends('layouts.app')

@section('title', 'Résultats Finaux')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Résultats Finaux</h1>
    <table class="table table-hover table-bordered shadow-sm">
        <thead class="bg-dark text-white">
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
                <th>CNE</th>
                <th>Email</th>
                <th>Téléphone</th>
            </tr>
        </thead>
        <tbody>
            @forelse($candidates as $candidate)
            <tr>
                <td>{{ $candidate->nom }}</td>
                <td>{{ $candidate->prenom }}</td>
                <td>{{ $candidate->filiere }}</td>
                <td>{{ $candidate->cne }}</td>
                <td>{{ $candidate->email }}</td>
                <td>{{ $candidate->telephone }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Aucun candidat définitivement admis.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
