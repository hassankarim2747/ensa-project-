<?php

namespace App\Http\Controllers;
use App\Models\Concours;
use Illuminate\Http\Request;
use App\Models\Candidate;
 use Illuminate\Support\Facades\Auth;
class EspController extends Controller
{
    
        public function in()
        {
            $concours = Concours::all();
            return view('concours.in', compact('concours'));
        }
        

       
        
      
            public function create()
            {
                $concours = Concours::all(); 
                return view('candidates.cr', compact('concours'));
            }
        
           
            public function store(Request $request)
            {
                $request->validate([
                    'concours_id' => 'required|exists:concours,id',
                   
                ]);
        
                
                $alreadyApplied = Candidate::where('user_id', Auth::id())
                                             ->where('concours_id', $request->concours_id)
                                             ->exists();
        
                if ($alreadyApplied) {
                    return redirect()->back()->with('error', 'Vous avez déjà postulé à ce concours.');
                }
        
              
                Candidate::create([
                    'user_id' => Auth::id(),
                    'id' => $request->cadidat_id,
                    'nom' => $request->input('nom'), 
                    'prenom' => $request->input('prenom'),
                    'cne' => $request->input('cne'),
                    'filiere' => $request->input('filiere'),
                   'email' => $request->input('email'),
                   'telephone' => $request->input('telephone'),
                   'date_naissance' => $request->input('date_naissance'),
                   'adresse' => $request->input('adresse'),
                   'date_naissance' => $request->input('date_naissance'),
                   'date_naissance' => $request->input('date_naissance'),
                ]);
                
        
                return redirect()->route('concours.in')->with('success', 'Candidature soumise avec succès.');
            }
        }
        
       
    
       
    
      
       
    
    
    
    

