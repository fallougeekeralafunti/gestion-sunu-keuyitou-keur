<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('accueil');
});
Route::get('/demande', function () {
    return view('espaces-depositaires.demande');
});
Route::get('/dossier', function () {
    return view('espaces-depositaires.creation-dossier');
});
Route::get('/formulaire-ajout-fichier', function () {
    return view('espaces-depositaires.formulaire-ajout-fichier');
});
Route::get('/liste-fichier', function () {
    return view('espaces-depositaires.liste-fichier');
});
Route::get('/suivi', function () {
    return view('espaces-depositaires.suivi');
});
Route::get('/creerDemande', function () {
    return view('espaces-depositaires.demande.index');
});
Route::get('/creerFichier', function () {
    return view('espaces-depositaires.fichiers.create');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
