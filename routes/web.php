<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListeController;

Route::get('/Connexion', [AuthController::class, 'login_view'])->name('login');
Route::get('/Inscription', [AuthController::class, 'registre_view'])->name('registre');

Route::post('/auth_registre', [AuthController::class, 'auth_registre'])->name('auth_registre');
Route::post('/auth_login', [AuthController::class, 'auth_login'])->name('auth_login');

Route::middleware(['auth'])->group(function () {

    Route::get('/', [Controller::class, 'accueil'])->name('accueil');
    Route::get('/User', [Controller::class, 'user'])->name('user');
    Route::post('/new', [AuthController::class, 'user_new'])->name('user_new');

    Route::get('/Deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');

    Route::get('/Liste', [ListeController::class, 'liste'])->name('liste');
    Route::get('/liste_update/{id}', [ListeController::class, 'liste_update'])->name('liste_update');
    Route::get('/liste_update_recherche/{id}', [ListeController::class, 'liste_update_recherche'])->name('liste_update_recherche');
    Route::get('/Recherche', [ListeController::class, 'liste_recherche'])->name('liste_recherche');

    Route::get('/supprimer/{id}', [ListeController::class, 'supprimer'])->name('supprimer');
    Route::post('/update', [ListeController::class, 'update'])->name('update');
    Route::post('/update_recherche', [ListeController::class, 'update_recherche'])->name('update_recherche');

});