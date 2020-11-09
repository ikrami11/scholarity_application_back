<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projet;
use Redirect;
use Auth;
use Session;
use App\Models\Etudiant;
use App\Models\Niveau;
use App\Models\Groupe;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class RechMatController extends Controller
{
    /**
 * Permettre de Rechercher un etudiant par son matricule et afficher ses informations
 *  Avoir en parametre une variable venant du formulaire 
 * qui contient le matricule de l'etudiant
 *
 */ 

    public function rechEtd(Request $request) 
    {
        if (Auth::check())     //verifier si l administrateur est authentifié
        {

        $matricule=$request->input('matricule');
        $id= DB::table('users')->where('login',$matricule)->select('id')->get();
        if ($id == '[]')
        {
            return "err: matricule  n existe pas dans la bdd";
        }
        else
        {
            $nom= DB::table('users')->where('login',$matricule)->select('name','surname')->get();
            $idgrp=Etudiant::where('id',$id[0]->id)->select('idgrp')->get();
            $grp=Groupe::where('id',$idgrp[0]->idgrp)->select('idniv','numero')->get();
            $niv=Niveau::where('id',$grp[0]->idniv)->select('nom')->get();
            $lieuNaiss=Etudiant::where('id',$id[0]->id)->select('lieunaiss')->get();
            $dateNaiss=Etudiant::where('id',$id[0]->id)->select('datenaiss')->get();

            // apr l integration du front avec le back , on envoie ces info au view concerné
            echo "Matricule :";
            echo $matricule;
            echo "<br>";
            echo "Prenom : ";
            echo $nom[0]->name;
            echo "<br>";
            echo "Nom : ";
            echo $nom[0]->surname;
            echo "<br>";
            echo "Niveau : ";
            echo $niv[0]->nom;
            echo "<br>";
            echo "groupe: ";
            echo $grp[0]->numero;
            echo "<br>";
            echo "lieu naiss : ";
            echo $lieuNaiss[0]->lieunaiss;
            echo "<br>" ;
            echo "Date naiss : ";
            echo $dateNaiss[0]->datenaiss;

        }
    }
    else
    {
        abort(401,"Unauthenticated.");
        //return redirect('auth/login');
    }   
        
    } 


    public function getMatricule(){

        $mat = etudiant.mail :: all();
        return $mat;
    
    }
    
}