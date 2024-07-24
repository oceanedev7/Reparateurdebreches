<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilArticleController;
use App\Http\Controllers\CommentaireController;


Route::get('/', function () {
    return view('appli.accueil');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/articles', [AccueilArticleController::class, 'index'])->name('all-articles');
Route::get('/article/{id}', [AccueilArticleController::class, 'show'])->name('article');
Route::post('/article/commentaire', [CommentaireController::class, 'store'])->name('commentaire');
Route::get('/article', [CommentaireController::class, 'indexcommentaire'])->name('commentaire');
Route::post('/article', [CommentaireController::class, 'indexcommentaire'])->name('commentaire');
// Route::get('/article', [CommentaireController::class, 'index'])->name('commentairecréer');
