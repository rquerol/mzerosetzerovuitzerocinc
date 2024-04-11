<?php

namespace App\Http\Controllers;

use App\Models\prova;
use Illuminate\Http\Request;
use App

class ProvaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $r = new Rider();
        $r->nom=$request->input('nom');
        $r->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(prova $prova)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(prova $prova)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, prova $prova)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(prova $prova)
    {
        //
    }
}
