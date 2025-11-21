<!-- resources/views/concours/edit.blade.php -->

@extends('layouts.app')

@section('title', 'Modifier un Concours')

@section('content')
<div class="container">
    <h1>Modifier un Concours</h1>
    <form action="{{ route('concours.update', $concours->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $concours->nom }}" required>
        </div>
        
        <div class="form-group">
            <label for="date_debut">Date de Début</label>
            <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $concours->date_debut }}" required>
        </div>
        <div class="form-group">
            <label for="date_fin">Date de Fin</label>
            <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $concours->date_fin }}" required>
        </div>
        <div class="form-group">
            <label for="etat">État</label>
            <select class="form-control" id="etat" name="etat" required>
                <option value="ouvert" {{ $concours->etat == 'ouvert' ? 'selected' : '' }}>Ouvert</option>
                <option value="fermé" {{ $concours->etat == 'fermé' ? 'selected' : '' }}>Fermé</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
