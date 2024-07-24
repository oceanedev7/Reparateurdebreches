<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use App\Models\Article;
use Illuminate\Http\Request;

class AccueilArticleController extends Controller{

    public function index()
    {
        $articles = Article::all();
        return view('appli.all-articles', compact('articles'));
    }

    public function article()
    {
        $articles = Article::all();
        return view('appli.article', compact('articles'));
    }

    // public function indexcommentaire()
    // {
    //     $commentaires = Commentaire::all();
    //     // dd($commentaires);
    //     return view('appli.article', compact('commentaires'));
    // }
  
    public function show(string $id)
    {
        $article = Article::findOrFail($id);
        return view('appli.article', compact('article'));
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nom' => 'required|string',
    //         'commentaire' => 'required|string',
    //         'article_id' => 'required|exists:articles,id',
            
    //     ]);

    //     Commentaire::create($request->all());

    //     return view('appli.article');
    // }

}
