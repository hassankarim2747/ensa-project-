@extends('layouts.app')

@section('title', 'Ajouter un Candidat')

@section('content')
<div class="container">
    <h1>Ajouter un Candidat</h1>
    <form action="{{ route('candidates.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="cne">CNE</label>
            <input type="text" name="cne" class="form-control" id="cne" required>
        </div>
        
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" required>
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" required>
        </div>
        
        <div class="form-group">
            <label for="filiere">Filière</label>
            <input type="text" name="filiere" class="form-control" id="filiere" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>
        
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" required>
        </div>
        
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control" id="date_naissance" required>
        </div>
        
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" required>
        </div>
        
        <div class="form-group">
            <label for="etat">État</label>
            <select name="etat" class="form-control" id="etat" required>
                <option value="préinscrit">Préinscrit</option>
                <option value="admis">Admis</option>
                <option value="rejeté">Rejeté</option>
                <option value="admis écrit">admis écrit</option>

            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
