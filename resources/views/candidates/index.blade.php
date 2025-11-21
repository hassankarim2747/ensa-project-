@extends('layouts.app')

@section('title', 'Liste des candidats')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Liste des candidats</h1>
    @include('candidates.search') 
    <a href="{{ route('candidates.create') }}" class="btn btn-primary mb-3">Ajouter un candidat</a>
    <div class="table-responsive">
        <table class="table table-hover table-striped table-bordered shadow-sm">
            <thead class="bg-dark text-white">
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>filiere</th>
                    <th>concours</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidates)
                <tr class="bg-light">
                    <td>{{ $candidates->nom }}</td>
                    <td>{{ $candidates->prenom }}</td>
                    <td>{{ $candidates->filiere }}</td>
                    <td>{{ $candidates->concours }}</td>
                    <td>
                        <a href="{{ route('candidates.edit', $candidates->id) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('candidates.destroy', $candidates->id) }}" method="POST" style="display:inline-block;">
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
