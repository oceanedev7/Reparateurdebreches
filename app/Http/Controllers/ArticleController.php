<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller{

    public function index()
    {
// afficher la page gérer les articles
            $articles = Article::all();
            return view('admin_pages.dashboard_article', compact('articles'));
        }
        public function store(Request $request)
        {

            $post = Article::create([
                'id_user' => auth()->id(),
                'titre' => $request->input('titre'),
                'contenu' => $request->input('contenu'),
                'photo' => $request->input('photo'),
            ]);
            return redirect('/dashboard/article');
        }

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
