<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller{

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
}