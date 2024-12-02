<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Services\EmailService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InscriptionController extends Controller
{
   public function inscriptionview():View
   {
    return view('Pages.inscription');
   }

        public function admisions(Request $request, EmailService $emailService)
        {
            $email = $request->input('email');
            $name = $request->input('nom');
            $prenom = $request->input('prenom');

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
            // Envoyer un email de confirmation
            $Subject = 'Confirmation d\'enregistrement pour l\'admission';
            $message = 'Salut ' .  $prenom . ' ' . $name.  ' ' . 'Votre inscription a été enregistrée avec succès. veillez passer au bureau d\'admission pour le reste du processus.';
            $emailService->sendEmail($Subject, $email, $name, false, $message);

            // Rediriger vers la page d'inscription avec un message de succès

            return redirect()->route('inscription')->with('success', 'Votre enregistrement  a été fait avec succès.'. 'Vous allez recevoir un email pour la suite.');
        }

}
