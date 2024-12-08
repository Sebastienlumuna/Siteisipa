<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\Post\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route de pages
Route::controller(PagesController::class)->group(function(){
    Route::get('/', 'index')->name('home');
    Route::get('/Apropos', 'apropos')->name('apropos');
    Route::get('/programmes', 'programmes')->name('progrrammes');
    Route::get('/etudiants', 'etudiants')->name('etudiants');
    Route::get('/filieres', 'filieres')->name('filieres');
    Route::get('/contact', 'contact')->name('contact');

    // filieres

    Route::get('/Filieres/informatique-de-gestion', 'infogestion')->name('infogestion');
    Route::get('/Filieres/genie-logiciel', 'genilogiciel')->name('genilogiciel');
    Route::get('/Filieres/communication-numerique', 'communication')->name('communication');
    Route::get('/Filieres/technique-de-maintenance', 'tm')->name('tm');
    Route::get('/Filieres/intelligence-artificielle', 'ia')->name('ia');
    Route::get('/Filieres/systeme-informatique-admin-bdd', 'systemebdd')->name('systemebdd');
    Route::get('/Filieres/banque', 'banque')->name('banque');
    Route::get('/Filieres/marketing-digital', 'marketing')->name('marketing');
    Route::get('/Filieres/fiscalite', 'fiscalite')->name('fiscalite');
    Route::get('/Filieres/comptabilite', 'comptabilite')->name('comptabilite');
    Route::get('/Filieres/gestion-financiere', 'gefinanciere')->name('gfinanciere');


});

// route d'inscription
Route::controller(InscriptionController::class)->group(function(){
    Route::post('/inscription', 'admisions')->name('admission');
    Route::get('/inscription', 'inscriptionview')->name('inscription');
});

// Route de post
require base_path('routes/controllers/post.php');
