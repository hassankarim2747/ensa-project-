<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{

public function index()
    {
        $candidates= Candidate::all();
        return view('candidates.index', compact('candidates'));
    }
    public function create()
    {
        return view('candidates.create');
    }
    public function store(Request $request)
{
    // Validation des données du formulaire
    $request->validate([
        'cne' => '|string|max:20',
        'nom' => '|string|max:255',
        'prenom' => '|string|max:255',
        'filiere' => '|string|max:255',
        'email' => '|email|max:255',
        'telephone' => '|string|max:15',
        'date_naissance' => '|date',
        'adresse' => '|string|max:255',
        'etat' => '|string|',
    ]);

    // Création du candidat dans la base de données
    Candidate::create($request->all());

    // Redirection vers la liste des candidats avec un message de succès
    return redirect()->route('candidates.index')->with('success', 'Candidat créé avec succès.');
}
public function edit($id)
    {
        $candidates = Candidate::findOrFail($id);
        return view('candidates.edit', compact('candidates'));
    }

    public function update(Request $request, $id)
    {
        $candidates = Candidate::findOrFail($id);

        $request->validate([
            
            'cne' => '|string|max:20',
        'nom' => '|string|max:255',
        'prenom' => '|string|max:255',
        'filiere' => '|string|max:255',
        'email' => '|email|max:255',
        'telephone' => '|string|max:15',
        'date_naissance' => '|date',
        'adresse' => '|string|max:255',
        'etat' => '|string|',
        ]);

        $candidates->update($request->all());

        return redirect()->route('candidates.index')->with('success', 'Concours mis à jour avec succès.');
    }
    public function destroy($id)
    {
        Candidate::find($id)->delete();
        return redirect()->route('candidates.index')->with('success', 'Concours supprimé avec succès.');
    }
    public function show(Request $request)
    {    $query = Candidate::query();

        // Appliquer les filtres
        if ($request->has('cne') && $request->cne != '') {
            $query->where('cne', 'like', '%' . $request->cne . '%');
        }

        if ($request->has('nom') && $request->nom != '') {
            $query->where('nom', 'like', '%' . $request->nom . '%');
        }

        if ($request->has('prenom') && $request->prenom != '') {
            $query->where('prenom', 'like', '%' . $request->prenom . '%');
        }

        // Récupérer les résultats filtrés
        $candidates = $query->get();

        return view('candidates.index', compact('candidates'));
    }
    
    public function scopeByStatus($query, $status)
    {
        return $query->where('etat', $status);
    }
    public function publishWrittenResults()
{
    $candidates = Candidate::where('etat', 'admis écrit')->get();
    return view('candidates.written', compact('candidates'));
    
}
public function publishOralResults()
{
    $candidates = Candidate::where('etat', 'admis oral')->get();
    return view('candidates.oral', compact('candidates'));
    
}
public function publishFinalResults()
{
    $candidates = Candidate::where('etat', 'admis_final ')->get();
    return view('candidates.final', compact('candidates'));
    
}

}
