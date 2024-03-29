<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class SaluduController extends Controller
{
    public function init(Request $request){
        $nom = $request->input('nom');
        $cognoms = $request->input('cognoms');
        $user = new Usuari();
        $user->nom = $nom;
        $user->cognoms = $cognoms;
        return view('saludu',compact('user'));
    }

}
