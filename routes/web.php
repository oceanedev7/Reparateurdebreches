<?php


use App\Http\Controllers\ActuAccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\AccueilArticleController;

use App\Http\Controllers\AccueilController;



use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;



Route::get('/', [AccueilController::class, 'index'])->name('accueil');


Route::get('/dashboard', function () {
    return view('dashboard2');
})->middleware(['auth', 'verified'])->middleware('can:isAdmin')->name('dashboard2');

// Route admin des pages de gestion
Route::middleware('can:isAdmin')->group(
    function () {
        Route::get('/dashboard/actualite', [ActualiteController::class, 'index'])->name('dashboard_actualite');
        Route::post('/dashboard/actualite/nouveau', [ActualiteController::class, 'store'])->name('newActualite');
        Route::get('/dashboard/actualite/update/{id}', [ActualiteController::class, 'update'])->name('updateActualite');
        Route::post('/dashboard/actualite/update/confirm/{id}', [ActualiteController::class, 'updateConfirmActualite'])->name('updateConfirmActualite');
        Route::get('/dashboard/actualite/delete/{id}', [ActualiteController::class, 'delete'])->name('deleteActualite');

        Route::get('/dashboard/evenement', [EvenementController::class, 'index'])->name('dashboard_evenement');
        Route::post('/dashboard/evenement/nouveau', [EvenementController::class, 'store'])->name('newEvenement');
        Route::get('/dashboard/evenement/update/{id}', [EvenementController::class, 'update'])->name('updateEvenement');
        Route::post('/dashboard/evenement/update/confirm/{id}', [EvenementController::class, 'updateConfirmEvenement'])->name('updateConfirmEvenement');
        Route::get('/dashboard/evenement/delete/{id}', [EvenementController::class, 'delete'])->name('deleteEvenement');

        Route::get('/validerunadherent', [InscriptionController::class, 'index'])->name('dashboardValidationAdherent');
        Route::post('/nouveladherent', [InscriptionController::class, 'create'])->name('nouveladherent');
        Route::get('/nouveladherent/{id}', [InscriptionController::class, 'destroy'])->name('supprimerdemandeadherent');
        Route::get('/validerinscription/{id}', [InscriptionController::class, 'show'])->name('validerinscription');

        Route::get('/dashboard/parametre', [ParametreController::class, 'index'])->name('dashboard_parametre');
        Route::post('/dashboard/parametre/confirm', [ParametreController::class, 'updateConfirmParametre'])->name('updateConfirmParametre');
        Route::get('/dashboard/reset', [PasswordResetLinkController::class, 'store'])->name('newPassword');

        Route::get('/dashboard/article', [ArticleController::class, 'index'])->name('dashboard_article');
        Route::get('/dashboard/article/update/{id}', [ArticleController::class, 'update'])->name('updateArticle');
        Route::post('/dashboard/article/nouveau', [ArticleController::class, 'store'])->name('newArticle');
        Route::post('/dashboard/article/update/confirm/{id}', [ArticleController::class, 'updateConfirmArticle'])->name('updateConfirmArticle');
        Route::get('/dashboard/article/delete/{id}', [ArticleController::class, 'delete'])->name('deleteArticle');

        Route::get('/dashboard/newsletter', [NewsletterController::class, 'index'])->name('dashboard_newsletter');
        Route::post('/dashboard/newsletter/nouveau',[NewsletterController::class,'store'])->name('newNewsletter');
        Route::post('/dashboard/newsletter/delete/{id}', [NewsletterController::class, 'updateConfirmNewsletter'])->name('updateConfirmNewsletter');



    }

);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/formulaire',[FormEventController::class, 'index'])->name('form');
Route::post('/formulaire', [FormEventController::class, 'create'])->name('formulaire');
Route::get('edit/{id}/delete', [FormEventController::class,'destroy'])->name('deleteinscrit');
Route::get('eventadherent', [FormEventController::class,'showEvents'])->name('event');
Route::get('formulaire/{id}', [FormEventController::class,'show'])->name('formulaire-inscrit');


Route::get('/articles', [AccueilArticleController::class, 'index'])->name('all-articles');
Route::get('/article/{id}', [AccueilArticleController::class, 'show'])->name('appli.article');
Route::post('/article/{id}/commentaire', [AccueilArticleController::class, 'ajouterCommentaire'])->name('ajouterCommentaire');
require __DIR__.'/auth.php';

