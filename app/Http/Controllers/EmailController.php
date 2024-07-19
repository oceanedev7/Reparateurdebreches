<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Demandedecontact;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $afficheremails = Demandedecontact::all();
        // dd($afficheremails);
        return view('appli.contactmail', ['emails' => $afficheremails]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
    
        $contact = Demandedecontact::create($request->all());
    
        Mail::to('reparateurs@de-breches.org')->send(new Contact($request->except('_token')));
    
        return view('appli.contact', ['emails' => [$contact]]);
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
