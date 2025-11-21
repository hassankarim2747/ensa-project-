@extends('layouts.app')

@section('title', 'Modifier un Candidat')

@section('content')
<div class="container">
    <h1>Modifier un Candidat</h1>
    <form action="{{ route('candidates.update', $candidates->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="cne">CNE</label>
            <input type="text" name="cne" class="form-control" id="cne" value="{{ old('cne', $candidates->cne) }}" required>
        </div>
        
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" id="nom" value="{{ old('nom', $candidates->nom) }}" required>
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" id="prenom" value="{{ old('prenom', $candidates->prenom) }}" required>
        </div>
        
        <div class="form-group">
            <label for="filiere">Filière</label>
            <input type="text" name="filiere" class="form-control" id="filiere" value="{{ old('filiere', $candidates->filiere) }}" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email', $candidates->email) }}" required>
        </div>
        
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" value="{{ old('telephone', $candidates->telephone) }}" required>
        </div>
        
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control" id="date_naissance" value="{{ old('date_naissance', $candidates->date_naissance) }}" required>
        </div>
        
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" id="adresse" value="{{ old('adresse', $candidates->adresse) }}" required>
        </div>
        
        <div class="form-group">
    <label for="etat">État</label>
    <select name="etat" class="form-control" id="etat" required>
        <option value="préinscrit" {{ old('etat', $candidates->etat) == 'préinscrit' ? 'selected' : '' }}>Préinscrit</option>
        <option value="admis" {{ old('etat', $candidates->etat) == 'admis' ? 'selected' : '' }}>Admis</option>
        <option value="rejeté" {{ old('etat', $candidates->etat) == 'rejeté' ? 'selected' : '' }}>Rejeté</option>
        <option value="admis écrit" {{ old('etat', $candidates->etat) == 'admis écrit' ? 'selected' : '' }}>admis écrit</option>
        <option value="admis oral" {{ old('etat', $candidates->etat) == 'admis oral' ? 'selected' : '' }}>admis oral</option>
        <option value="admis_final" {{ old('etat', $candidates->etat) == 'admis_final' ? 'selected' : '' }}>admis_final</option>
    </select>
</div>

        
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
