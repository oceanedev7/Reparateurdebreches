<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller{

    public function index()
    {
        $articles = Article::all();
        return view('appli.all-articles', compact('articles'));
    }
}
