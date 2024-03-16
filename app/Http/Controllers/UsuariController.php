<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuariController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login(){
        // $usuari=new Usuari();
        // $usuari->actiu=true;
        // $usuari->contrasenya=\bcrypt('123');
        // $usuari->correu="rquerol@politecnics.barcelona";
        // $usuari->nom="Rebeca";
        // $usuari->cognoms="Querol i Xifré";
        // $usuari->rols_id=1;

        // $usuari->save();

        return View('login');
    }

    public function auth(Request $request){
        $username = $request->input('username');
        $contraseña = $request->input('contraseña');

        $user = Usuario::where('username',$username)->first();
        if($user!=null && Hash::check($contraseña, $user->contraseña)){
            Auth::login($user);
            $response = Route::redirect('cicle');

        }else{

        }
        return View('login');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuari $usuari)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuari $usuari)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuari $usuari)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuari $usuari)
    {
        //
    }
}
