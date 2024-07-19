<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\InscriptionController;


// Routes visiteur
Route::get('/', function () {
    return view('appli.accueil');
})->name('accueil');

Route::get('/deveniradherent', function () {
    return view('appli.deveniradherent');
})->name('deveniradherent');


Route::get('/agenda', function () {
    return view('appli.agenda');
})->name('agenda');

Route::get('/evenement', function () {
    return view('appli.evenement');
})->name('evenement');

Route::get('/les-actualites', function () {
    return view('appli.lesactus');
})->name('les-actus');

Route::get('/actualite', function () {
    return view('appli.actu');
})->name('actu');

// Route::get('/validerunadherent', function () {
//     return view('admin_pages.validadherent');
// })->name('validerunadherent');
Route::get('/validerunadherent', [InscriptionController::class, 'index'])->name('validerunadherent');
Route::post('/validerunadherent', [InscriptionController::class, 'create'])->name('nouveladherent');


Route::get('/nouscontacter', function () {
    return view('appli.contact');
})->name('contact');

Route::get('/envoi-email', [EmailController::class, 'index'])->name('contactmail');
Route::post('/nouscontacter', [EmailController::class, 'store'])->name('contact');



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
        Route::get('/dashboard/articles', function () {
            return view('admin_pages.dashboard_article');
        })->name('dashboard_article');
    }

);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';




