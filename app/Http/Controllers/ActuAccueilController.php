<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActuAccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $actualites = Actualite::all();
    //    dd($actualites);
        return view('appli.lesactus', ['actualites' => $actualites]);
    }

    /**
     * Show the form for creating a new resource.
     */


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
    public function show(string $id)
    {
        $actualite = Actualite::findOrFail($id);
        return view('appli.actu', compact('actualite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
