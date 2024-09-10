<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LocalisationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/formations', [FormationController::class, 'index'])->name('formations');

Route::get('/localisation', [LocalisationController::class, 'index'])->name('localisation');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/mentions-legales', [LegalController::class, 'mentionsLegales'])->name('mentions.legales');
Route::get('/conditions-generales', [LegalController::class, 'conditionsGenerales'])->name('conditions.generales');
Route::get('/politique-confidentialite', [LegalController::class, 'politiqueConfidentialite'])->name('politique.confidentialite');
Route::get('/reglement-interieur', [LegalController::class, 'reglementInterieur'])->name('reglement.interieur');
Route::get('/protocole-sanitaire', [LegalController::class, 'protocoleSanitaire'])->name('protocole.sanitaire');
Route::get('/demarche-qualite', [LegalController::class, 'demarcheQualite'])->name('demarche.qualite');
Route::get('/formation-handicap', [LegalController::class, 'formationHandicap'])->name('formation.handicap');
