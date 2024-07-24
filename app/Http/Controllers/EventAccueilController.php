<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EventAccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $evenements = Evenement::all();
        //    dd($actualites);
            return view('appli.agenda', ['evenements' => $evenements]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //    
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evenement = Evenement::findOrFail($id);
        return view('appli.evenement', compact('evenement'));
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
