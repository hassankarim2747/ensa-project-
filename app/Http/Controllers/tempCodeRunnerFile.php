<?php


public function store(Request $request){
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
                    'concours_id' => $request->concours_id,
                    
                ]);
        
                return redirect()->route('C.in')->with('success', 'Candidature soumise avec succès.');
            }
        