<?php

namespace App\Http\Controllers;
use Auth;
use Hash;
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

    public function showlogin(){
        // $usuari=new Usuari();
        // $usuari->actiu=true;
        // $usuari->contrasenya=\bcrypt('123');
        // $usuari->correu="clara@politecnics.barcelona";
        // $usuari->nom="Clara";
        // $usuari->cognoms="Ris Querol";
        // $usuari->rols_id=1;
        // $usuari->save();x

        return View('login');
    }

    public function login(Request $request){
        $useremail = $request->input('useremail');
        $contraseña = $request->input('contrasenya');

        $user = Usuari::where('correu',$useremail)->first();

        if($user!=null && Hash::check($contraseña, $user->contrasenya))
        {
            Auth::login($user);
            $response= view('saludu', compact('user'));

        }else{
            $response = redirect('cicle');
        }
        return $response;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
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
