<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagescontroller;
use App\Http\Controllers\InscriptionController;
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

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::get('/Apropos', [PagesController::class, 'apropos'])->name('apropos');
Route::get('/programmes', [PagesController::class, 'programmes'])->name('progrrammes');
Route::get('/etudiants', [PagesController::class, 'etudiants'])->name('etudiants');
Route::get('/filieres', [PagesController::class, 'filieres'])->name('filieres');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/inscription', [InscriptionController::class, 'inscriptionview'])->name('inscription');


// view de filieres

Route::get('/Filieres/informatique-de-gestion', [Pagescontroller::class, 'infogestion'])->name('infogestion');
Route::get('/Filieres/genie-logiciel', [Pagescontroller::class, 'genilogiciel'])->name('genilogiciel');
Route::get('/Filieres/communication-numerique', [Pagescontroller::class, 'communication'])->name('communication');
Route::get('/Filieres/technique-de-maintenance', [Pagescontroller::class, 'tm'])->name('tm');

Route::get('/Filieres/intelligence-artificielle', [Pagescontroller::class, 'ia'])->name('ia');
Route::get('/Filieres/systeme-informatique-admin-bdd', [Pagescontroller::class, 'systemebdd'])->name('systemebdd');
Route::get('/Filieres/banque', [Pagescontroller::class, 'banque'])->name('banque');
Route::get('/Filieres/marketing-digital', [Pagescontroller::class, 'marketing'])->name('marketing');
Route::get('/Filieres/fiscalite', [Pagescontroller::class, 'fiscalite'])->name('fiscalite');
Route::get('/Filieres/comptabilite', [Pagescontroller::class, 'comptabilite'])->name('comptabilite');
Route::get('/Filieres/gestion-financiere', [Pagescontroller::class, 'gfinanciere'])->name('gfinaniere');
