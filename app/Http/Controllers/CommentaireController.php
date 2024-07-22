<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller{

    public function index()
    {
        $commentaires = Commentaire::all();
        return view('appli.all-articles', compact('articles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'commentaire' => 'required',
            
            
        ]);

        Product::create($request->all());

        return redirect()->route('index');
    }
}