<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InscriptionController extends Controller
{
   public function inscriptionview():View
   {
    return view('Pages.inscription');
   }

        public function admisions(Request $request)
        {
            $validation = $request->validate([
                'nom' => 'required|string|max:255',
                'postnom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'sexe' => 'required|in:Homme,Femme', // Valider le genre avec une valeur spécifique
                'email' => 'required|email|unique:admissions,email',
                'phone' => 'required|numeric', // Vérifie que le téléphone est un numéro
                'address' => 'required|string|max:255', // Vérifie que l'adresse est bien une chaîne
                'filiere' => 'required|string|max:255',
                'niveau' => 'required|string|max:255',
            ]);
            // Créer une nouvelle inscription
            $inscription = Admission::create($validation);
            return redirect()->route('inscription')->with('success', 'Votre enregistrement  a été fait avec succès.'. 'Vous allez recevoir un email pour la suite.');
        }

}
