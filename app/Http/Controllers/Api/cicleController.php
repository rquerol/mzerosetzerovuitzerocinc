<?php

namespace App\Http\Controllers\Api;

use App\Models\cicle;
use App\Clases\Utilitats;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\cicleResource;
use Illuminate\Database\QueryException;

class cicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cicles = cicle::all();
        return cicleResource::Collection($cicles);
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
            $response = (new cicleResource($cicle))
                        ->response()
                        ->setStatusCode(201);
        }
        catch(QueryException $ex){
            $mensaje = Utilitats::errorMessage($ex);
            $response = \response()
                        ->json(['error'=>$mensaje],400);
        }

        return $response;
    }

    /**
     * Display the specified resource.
     */
    public function show(cicle $cicle)
    {
        $cicle =  cicle::with('cursos')->find($cicle->id);
        return new cicleResource($cicle);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cicle $cicle)
    {
        $cicle->sigles=$request->input('sigles');
        $cicle->nom=$request->input('nom');
        $cicle->descripcio=$request->input('descripcio');
        $cicle->actiu=($request->input('actiu')=='actiu');

        try{
            $cicle->save();
            $response = (new cicleResource($cicle))
                        ->response()
                        ->setStatusCode(201);
        }
        catch(QueryException $ex){
            $mensaje = Utilitats::errorMessage($ex);
            $response = \response()
                        ->json(['error'=>$mensaje],400);
        }

        return $response;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cicle $cicle)
    {
        try{
            $cicle->delete();
            $response = \response()
            ->json(['missatge'=>'Registre esborrat correctament'],200);

        }catch(QueryException $ex)
        {
            $mensaje = Utilitats::errorMessage($ex);
            $response = \response()
            ->json(['error'=>$mensaje],400);
        }
        return $response;
    }
}
