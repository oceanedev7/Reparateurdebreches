<?php

// namespace App\Http\Controllers;

// use App\Models\Commentaire;
// use Illuminate\Http\Request;

// class CommentaireController extends Controller{

//     public function indexcommentaire()
//     {
//         $commentaires = Commentaire::all();
//         // dd($commentaires);
//         return view('appli.article', compact('commentaires'));
//     }
  
//     public function store(Request $request)
//     {
//         $request->validate([
//             'nom' => 'required|string',
//             'commentaire' => 'required|string',
//             'article_id' => 'required|exists:articles,id',
            
//         ]);

//         Commentaire::create($request->all());

//         return view('appli.article');
//     }

// }