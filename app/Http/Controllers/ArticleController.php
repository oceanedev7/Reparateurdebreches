<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller{

    public function index()
    {
// afficher la page gérer les articles
            $articles = Article::all();
            // dd($articles);
            return view('admin_pages.dashboard_article', compact('articles'));
        }
        public function store(Request $request)
        {
            // dd(auth()->user()->id,'newArticle',$request);

            $request->validate([
                'titre' =>'required',
                'description'=>'required',
                'photo'=>'required'
                ]);
                // $article = new Article();
                // $article ->titre = $request->titre;
                // $article ->description = $request->description;
                // $article ->photo = $request->photo;
                //  $article->save();
                // dd(auth()->user()->id,'newArticle',$request);

            $post = Article::create([
                'id_user' => auth()->user()->id,
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),
                'photo' => $request->input('photo'),
            ]);
            return redirect('/dashboard/article')->with('status','article ajouté');
        }


        // public function ajouter_article_nouveau(Request $request)
        // {
        //     $request->validate([
        //         'titre' =>'required',
        //         'description'=>'required',
        //         'photo'=>'required'
        //     ]);
        //     $article = new Article();
        //     $article ->titre = $request->titre;
        //     $article ->description = $request->description;
        //     $article ->photo = $request->photo;
        //     $article->save();

        //     return redirect('\article')->with('status','article ajouté');
        // }
        public function update($id)
        {
            $article = Article::findOrFail($id);
            return view('admin_pages.updateArticle', ['article' => $article]);
        }

        public function updateConfirmArticle(Request $request, $id)
        {
            $post = Article::findOrFail($id);
            $post->update([
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),
                'photo' => $request->input('photo')
            ]);
            return redirect('/dashboard/article');
        }

        public function delete($id)
        {
            $article = Article::findOrFail($id);
            $article->delete();
            return redirect('/dashboard/article');
        }
    };
