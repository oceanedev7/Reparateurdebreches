<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller{

    public function index()
    {
        $articles = Article::all();
        return view('admin_pages/dashboard_article', compact('articles'));
    }
    public function store(Request $request)
        {

            // $post = Article::create([
            //     'id_user' => auth()->id(),
            //     'titre' => $request->input('titre'),
            //     'contenu' => $request->input('contenu'),
            //     'photo' => $request->input('photo'),
            // ]);
            // return redirect('/dashboard/article');

            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                'titre' => 'required|string',
                'description' => 'required|string',
            ]);

            if ($request->hasFile('photo')){
                $path = $request->file('photo')->store('public/images');
                $photoPath = Storage::url($path);

                $post = Article::create([
                    'id_user' => auth()->id(),
                    'titre' => $request->input('titre'),
                    'description' => $request->input('description'),
                    'photo' => $path,
                ]);

                return  redirect('/dashboard/article');
            }
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
}
