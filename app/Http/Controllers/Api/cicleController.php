<?php

namespace App\Http\Controllers\Api;

use App\Models\cicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\cicleResource;

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cicle $cicle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cicle $cicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cicle $cicle)
    {
        //
    }
}
