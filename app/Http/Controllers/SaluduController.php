<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaluduController extends Controller
{
    public function init(Request $request){

        return view('saludu');
    }
}
