<?php


use App\Http\Controllers\AccueilArticleController;
use App\Http\Controllers\ActuAccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\ArticleadherentController;

use App\Http\Controllers\AccueilController;



use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormEventController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventAccueilController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\NewsletterController;


Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Routes visiteur
// Route::get('/', function () {
//     return view('appli.accueil');
// })->name('accueil');

Route::get('/deveniradherent', function () {
    return view('appli.deveniradherent');
})->name('deveniradherent');


// Route::get('/agenda', function () {
//     return view('appli.agenda');
// })->name('agenda');
Route::get('/agenda', [EventAccueilController::class, 'index'])->name('agenda');
Route::get('/evenement/{id}', [EventAccueilController::class, 'show'])->name('evenement');



// Route::get('/evenement', function (){
//     return view('appli.evenement');
// })->name('evenement');

// Route::get('/les-actualites', function (){
//     return view('appli.lesactus');
// })->name('les-actus');
Route::get('/les-actualites', [ActuAccueilController::class, 'index'])->name('les-actus');
Route::get('/actualite/{id}', [ActuAccueilController::class, 'show'])->name('actu');


// Route::get('/actualite', function (){
//     return view('appli.actu');
// })->name('actu');

// Route::get('/validerunadherent', function (){
//     return view('admin_pages.validadherent');
// })->name('validerunadherent');


Route::get('/mentionslegales', function () {
    return view('appli.mentionslegales');
})->name('mentionslegales');

Route::get('/cgv', function () {
    return view('appli.cgv');
})->name('cgv');

Route::get('/confidentialites', function () {
    return view('appli.confidentialites');
})->name('confidentialites');

Route::get('/nouscontacter', function () {
    return view('appli.contact');
})->name('contact');

Route::get('/demandedecontact', [EmailController::class, 'index'])->name('contactmail');
Route::post('/nouscontacter', [EmailController::class, 'store'])->name('contact');
Route::get('/nouscontacter/delete/{id}', [EmailController::class, 'destroy'])->name('deleteContact');




Route::get('/articles', [AccueilArticleController::class, 'index'])->name('all-articles');

//Routes adhérent
Route::get('/formulaire', [FormEventController::class, 'index'])->name('form');
Route::post('/formulaire', [FormEventController::class, 'create'])->name('formulaire');
Route::get('edit/{id}/delete', [FormEventController::class, 'destroy'])->name('deleteinscrit');
Route::get('eventadherent', [FormEventController::class, 'showEvents'])->name('event');
Route::get('formulaire/{id}', [FormEventController::class, 'show'])->name('formulaire-inscrit');
Route::get('espaceadherent', function () {
    return view('appli.espaceadherent');
})->name('espaceadherent');

Route::get('/article', [ArticleadherentController::class, 'index'])->name('articleadherent');
Route::get('/article/update/{id}', [ArticleadherentController::class, 'update'])->name('updateArticleadherent');
Route::post('/article/nouveau', [ArticleadherentController::class, 'store'])->name('newArticleadherent');
Route::post('/article/update/confirm/{id}', [ArticleadherentController::class, 'updateConfirmArticle'])->name('updateConfirmArticleadherent');
Route::post('/article/delete/{id}', [ArticleadherentController::class, 'updateConfirmArticle'])->name('updateConfirmArticleadherent');

// Routes admin (page accueil +pages de gestion)

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
        Route::post('/dashboard/article/delete/{id}', [ArticleController::class, 'updateConfirmArticle'])->name('updateConfirmArticle');

        Route::get('/dashboard/newsletter', [NewsletterController::class, 'index'])->name('dashboard_newsletter');
        Route::post('/dashboard/newsletter/nouveau', [NewsletterController::class, 'store'])->name('newNewsletter');
        Route::post('/dashboard/newsletter/delete/{id}', [NewsletterController::class, 'updateConfirmNewsletter'])->name('updateConfirmNewsletter');



    }

);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';


require __DIR__ . '/auth.php';





