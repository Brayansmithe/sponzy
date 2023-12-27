<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

use Illuminate\Support\Facades\Hash;
class UtilisateurController extends Controller
{
    //
  
    public function form_register(Request $request){

        if($request->session()->get('utilisateurs')){
            return redirect('/home')->with('status','vous devez vous deconnecter ');
        }
        return view('register');
    }


    public function traitement_register(Request $request){
       /*  $request->validate([
            'email'=>'email|required:unique:users',
            'password'=>'required|min:5',
            'nom'=>'required',
            'prenom'=>'required',

             'num_tel',
        'mots_passe',
        'nom',
        'prenom',
        'num_retrait',
        'moyen_retrait',
        'code_parainage',
        'code_user',
        'solde_user',
        'type_use',

        ]); 
        $user=new Utilisateur();
        $user->num_tel=$request->input('num_tel');
        $user->mots_passe = bcrypt($request->input('mots_passe'));
        $user->code_parainage=$request->input('code_parainage');

        $user->save();
        return redirect('/register')->with('status', 'votre compte a bien ete cree.');*/

          // Valider les données entrées par l'utilisateur
          $validatedData = $request->validate([
            'num_tel' => 'required|unique:utilisateurs,num_tel', // Exemple de validation : champ requis et unique dans la table utilisateurs
            'mots_passe' => 'required|min:6', // Exemple de validation : champ requis et d'une longueur minimale de 6 caractères
            'code_parainage' => 'required|numeric', // Exemple de validation : champ requis et numérique
          ],
    
          [
            'num_tel'=>'le numero est deja utiliser'
          ]
    );

        // Créer un nouvel utilisateur
        $user = new Utilisateur();
        $user->num_tel = $validatedData['num_tel'];
        $user->mots_passe = Hash::make($validatedData['mots_passe']); // Utilisation de la méthode Hash pour sécuriser le mot de passe
        $user->code_parainage = $validatedData['code_parainage'];

        // Enregistrer l'utilisateur dans la base de données
        $user->save();

        // Redirection avec un message de succès
        return redirect('/register')->with('status', 'Votre compte a bien été créé.');
   

    }

    public function form_login(Request $request) {
        if ($request->session()->has('user')) {
            return redirect('/');
        }
        return view('login');
    }
    
    public function traitement_login(Request $request) {
        $request->validate([
            'num_tel' => 'required',
            'mots_passe' => 'required|min:6',
        ]);
    
        $user = Utilisateur::where('num_tel', $request->input('num_tel'))->first();
    
        if ($user) {
            if (Hash::check($request->input('mots_passe'), $user->mots_passe)) {
                $request->session()->put('user', $user);
                return redirect('/');
            } else {
                return back()->with('status', 'Identifiant ou mot de passe incorrect');
            }
        } else {
            return back()->with('status', 'Désolé, vous n\'avez pas de compte avec ce numéro de téléphone');
        }
    }
    

    
}

