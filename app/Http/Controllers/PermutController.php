<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Projet;
use Redirect;
use Auth;
use Session;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
class PermutController extends Controller
{
    /**
 *  Permettre de Permuter les groupes entre  deux etudiants existants dans la base de donnée
 *  Avoir en parametre une variable venant du formulaire 
 * qui contient les matricules des deux etudiants
 *
 */
    public function permuteEtd(Request $request)   
    {
        if (Auth::check())   
        {

        
        $mat1= $request->input('matricule1');
        $mat2= $request->input('matricule2');
        $id1= DB::table('users')->where('email',$mat1)->select('id')->get();
        if ($id1 == '[]')
        {
            echo "err: matricule 1 n existe pas dans la bdd";
            Session::flash('msg', "err: Le matricule 1 n ' existe pas dans la base de donnée  !");
            return -1;
            abort(301,"err: Le matricule 1 n ' existe pas dans la base de donnée !"); 
            
        }
        else
        {
            $id2= DB::table('users')->where('email',$mat2)->select('id')->get();
            if ($id2 == '[]')
            {
                echo "err2 : matricule 2 n existe pas dans la bdd";
                Session::flash('msg', "err: Le matricule 2 n ' existe pas dans la base de donnée !");
                return -1;
                abort(302,"err: Le matricule 2 n ' existe pas dans la base de donnée !"); 
            }

            else
            {
                $idgrp1=Etudiant::where('id',$id1[0]->id)->select('idgrp')->get();
                if ($idgrp1[0]->idgrp == NULL)
                {
                    echo "err: etd1 n est affecté à aucun grp";
                    Session::flash('msg', "err: l' etudiant 2 n 'est affecté à aucun groupe  !");
                    return -1;
                    abort(303,"err: l' etudiant 1 n 'est affecté à aucun groupe !"); 
                }
                else
                {
                    $idgrp2=Etudiant::where('id',$id2[0]->id)->select('idgrp')->get();
                    if ($idgrp2[0]->idgrp == NULL)
                    {
                     echo "err: etd2 n est  affecté à aucun grp";
                     Session::flash('msg', "err: l' etudiant 2 n 'est affecté à aucun groupe !");
                     return -1;
                     abort(304,"err: l' etudiant 2 n 'est affecté à aucun groupe !"); 
                     
                    }
                    else
                    {
                        //si deux etd appartiennent au mm grp donc on permute ce n est pas un cas particulier
        
                            Etudiant::where('id',$id1[0]->id)->update([ 'idgrp' =>$idgrp2[0]->idgrp ]);
                            Etudiant::where('id',$id2[0]->id)->update([ 'idgrp' =>$idgrp1[0]->idgrp]);

                            Session::flash('msg', "Permutation réussite ! Vous pouvez afficher les informations des deux étudiants pour vérifier");
                            abort(200,"Permutation reussite !");
                            return 0;   
                            //return redirect('/api/permut');
                    
                            
                    }        
                }
                
            }
          
        }
    }
    else
    {
        abort(401,"Unauthenticated.");
        return -1;
        //return redirect('auth/login');
    }   
        
        
    }
}