<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscription = User::all();
        // dd($inscription);
        return view('admin_pages.validadherent', ['inscriptions' => $inscription]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'genre'=> 'required|string',
            'date_naissance' =>'required|integer',
           'email' => 'required|email',
           'numero_telephone' => 'required|string',
           'adresse_postale' => 'required|string',
           'ville' => 'required|string',
           'code_postal' => 'required|string',
           'pays' => 'required|string',
     
        ]);
    
        User::create($request->all());
        
        return view('appli.deveniradherent');
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
    public function show(string $id)
    {
        //
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
