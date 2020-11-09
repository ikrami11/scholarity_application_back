<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Hash;

class CreerCompteController extends Controller
{
    /**
 * Creer un compte et l inserer dans la base de données
 *
 */
    public function creercpt()
    {
        $login='sarah';
        $user= new User();
        $user->login='sarabelaoura';
        $user->password=bcrypt('sarahhhh');
        $user->type='0';
        $user->name='sarah';
        $user->surname='belaoura';

        $user->save();

        $id=$user->id;
 
        return "utiliasateur creer";
        /* insertion dans la table etudiant s il est un etudiant
        DB::table('etudiant')->insert(
            array(
            'ID'=>$id,
            // les autres champs sont null par defaut, remplis manuellement pour le test
            
            )
        ); */
    }
}
