<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;



Route::get('/', function () {
    return view('appli.accueil');
})->name('accueil');

Route::get('/deveniradherent', function () {
    return view('appli.deveniradherent');
})->name('deveniradherent');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/articles', [ArticleController::class, 'index'])->name('all-articles');

Route::get('/faire-un-don', [DonationController::class, 'showForm'])->name('donation.form');
Route::post('/faire-un-don', [DonationController::class, 'processDonation'])->name('donation.process');
