<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    /**
     * authentification de l utilisateur
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
    public function index()
    {
     return "hhh" ;     
        
    }
*/
    public function formulaire()
    {
        return view('connex');
    }
    
    public function traitement()
    {
        request()->validate([
        'login' =>'required',
        'pwd'=>['required', ]
        ]);

        $result=auth()->attempt([
            'email'=>request('login'),
            'password'=>request('pwd')
        ]);
        
        //var_dump($result);
        var_dump(request('pwd'));
      
    }
}
