<?php

namespace App\Http\Controllers;

use App\Models\formevents;
use Illuminate\Http\Request;

class FormEventController extends Controller
{

    public function index(){
        $forms = formevents::all();

    return view('appli.formevent', ['inscrits'=>$forms]);
    }


    public function create(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string',
            'numero_telephone' => 'required|numeric',
        ]);
        formevents::create($request->all());
        return redirect("formulaire");
    }

    public function destroy(string $id){
        $forms=formevents::findOrFail($id);
        $forms->delete();

        return redirect("formulaire");
    }
}