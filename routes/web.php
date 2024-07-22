<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormEventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('appli.accueil');
});

Route::get('espaceadherent', function () {
    return view('appli.espaceadherent');
});
Route::get('eventadherent', function () {
    return view('appli.eventadherent');
})->name('event');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/formulaire',[FormEventController::class, 'index'])->name('form');
Route::post('/formulaire', [FormEventController::class, 'create'])->name('formulaire');
Route::get('edit/{id}/delete', [FormEventController::class,'destroy'])->name('deleteinscrit');

require __DIR__.'/auth.php';
