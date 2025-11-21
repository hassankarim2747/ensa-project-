<!-- resources/views/concours/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    
    <style>
        h1{
display: flex;
      justify-content: center; /* Center horizontally */
      
   
        }
        div{
            padding: 10px;
            display: flex;
      justify-content: center;
        }
        input{
            width: 1500px;
        }
        textarea{
            width: 1500px;
        }
        select{
            width: 1500px;
        }
        button{
            background-color: #fff;
          
            
        }
    </style>


    <title>Ajouter un concours</title>
</head>
<body>
@extends('layouts.app')
    <h1>Ajouter un concours</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('concours.store') }}" method="POST">
        @csrf
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
        </div>
        <div>
            <label for="date_debut">Date de début :</label>
            <input type="date" id="date_debut" name="date_debut" value="{{ old('date_debut') }}" required>
        </div>
        <div>
            <label for="date_fin">Date de fin :</label>
            <input type="date" id="date_fin" name="date_fin" value="{{ old('date_fin') }}" required>
        </div>
        <div>
            <label for="etat">État :</label>
            <select id="etat" name="etat" required>
                <option value="ouvert" {{ old('etat') == 'ouvert' ? 'selected' : '' }}>Ouvert</option>
                <option value="fermé" {{ old('etat') == 'fermé' ? 'selected' : '' }}>Fermé</option>
            </select>
        </div>
        <div>
            <label for="conditions_admission">Conditions d'admission :</label>
            <textarea id="conditions_admission" name="conditions_admission">{{ old('conditions_admission') }}</textarea>
        </div>
        <div>
            <label for="procedure_selection">Procédure de sélection :</label>
            <textarea id="procedure_selection" name="procedure_selection">{{ old('procedure_selection') }}</textarea>
        </div>
        <div>
            <label for="prerequis_pedagogiques">Prérequis pédagogiques :</label>
            <textarea id="prerequis_pedagogiques" name="prerequis_pedagogiques">{{ old('prerequis_pedagogiques') }}</textarea>
        </div>
        <div>
            <label for="procedure_candidature">Procédure de candidature :</label>
            <textarea id="procedure_candidature" name="procedure_candidature">{{ old('procedure_candidature') }}</textarea>
        </div>
        <div>
            <label for="calendrier">Calendrier :</label>
            <textarea id="calendrier" name="calendrier">{{ old('calendrier') }}</textarea>
        </div>
        <div>
            <button  type="submit">Ajouter</button>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
