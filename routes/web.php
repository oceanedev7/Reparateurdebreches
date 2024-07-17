<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


// Routes visiteur
Route::get('/', function () {
    return view('appli.accueil');
})->name('accueil');

Route::get('/deveniradherent', function () {
    return view('appli.deveniradherent');
})->name('deveniradherent');


Route::get('/articles', [ArticleController::class, 'index'])->name('all-articles');

//Routes adhérent
Route::get('espaceadherent', function () {
    return view('appli.espaceadherent');
});

// Routes admin (page accueil +pages de gestion)
Route::get('/dashboard', function () {
    return view('dashboard2');
})->middleware(['auth', 'verified'])->middleware('can:isAdmin')->name('dashboard2');

// Route admin des pages de gestion
Route::middleware('can:isAdmin')->group(
    function () {
        Route::get('/dashboard/actualite', function () {
            return view('admin_pages.dashboard_actualite');
        })->name('dashboard_actualite');
    }

);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';




