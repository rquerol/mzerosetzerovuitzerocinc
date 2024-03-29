<?php

namespace App\Http\Controllers;

use App\Models\cicle;
use Illuminate\Http\Request;

class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $actiu = $request->input('actiuBuscar');
        if($actiu=='actiu'){
     //       $cicles = Cicle::where('actiu','=',true)->get();
            $cicles = Cicle::where('actiu','=',true)->paginate(4)->withQueryString();

        }else{
            //$cicles = Cicle::all();
            $cicles = Cicle::paginate(4)->withQueryString();
        }

        $request->session()->flashInput($request->input());

        return View('cicles.index', compact('cicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('cicles.cicle');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cicle=new cicle();

        $cicle->sigles=$request->input('sigles');
        $cicle->nom=$request->input('nom');
        $cicle->descripcio=$request->input('descripcio');
        $cicle->actiu=($request->input('actiu')=='actiu');

        try{
            $cicle->save();
            $response= redirect()->action([CicleController::class, 'index']);
        }
        catch(QueryException $ex){
            $mensage = Utilitat::errorMessage($ex);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(cicle $cicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cicle $cicle)
    {
        return View('cicles.edit', compact('cicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cicle $cicle)
    {
        try{
            $cicle->sigles=$request->input('sigles');
            $cicle->nom=$request->input('nom');
            $cicle->descripcio=$request->input('descripcio');
            $cicle->actiu=($request->input('actiu')=='actiu');

            $cicle->save();
        }catch(QueryException $ex){

        }
        return redirect()->action([CicleController::class, 'index'],compact('request'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, cicle $cicle)
    {
        try{
            $cicle->delete();
            $request->session()->flash('mensaje','Registre esborrat correctament');

        }catch(QueryException $ex)
        {
            $mensaje = Utilitats::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
        }
        return redirect()->action([CicleController::class, 'index']);

    }
}
