<!-- resources/views/concours/show.blade.php -->

@extends('layouts.app')


    <div class="container">
        <h1>Détails du Concours: {{ $concours->nom }}</h1>
        
        <table class="table table-bordered">
            <tr>
                <th>Date de début</th>
                <td>{{ $concours->date_debut }}</td>
            </tr>
            <tr>
                <th>Date de fin</th>
                <td>{{ $concours->date_fin }}</td>
            </tr>
            <tr>
                <th>État</th>
                <td>{{ $concours->etat }}</td>
            </tr>
            <tr>
                <th>Conditions d'admission</th>
                <td>{{ $concours->conditions_admission }}</td>
            </tr>
            <tr>
                <th>Procédure de sélection</th>
                <td>{{ $concours->procedure_selection }}</td>
            </tr>
            <tr>
                <th>Prérequis pédagogiques</th>
                <td>{{ $concours->prerequis_pedagogiques }}</td>
            </tr>
            <tr>
                <th>Procédure de candidature</th>
                <td>{{ $concours->procedure_candidature }}</td>
            </tr>
            <tr>
                <th>Calendrier</th>
                <td>{{ $concours->calendrier }}</td>
            </tr>
        </table>

        <a href="{{ route('concours.index') }}" class="btn btn-primary">Retour à la liste des concours</a>
    </div>
