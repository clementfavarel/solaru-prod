<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\LocalisationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::get('/formations/{id}', [FormationController::class, 'show'])->name('formations.show');

Route::get('/localisation', [LocalisationController::class, 'index'])->name('localisation');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::prefix('legal')->group(function () {
    Route::get('/mentions-legales', [LegalController::class, 'mentionsLegales'])->name('mentions.legales');
Route::get('/conditions-generales', [LegalController::class, 'conditionsGenerales'])->name('conditions.generales');
Route::get('/politique-confidentialite', [LegalController::class, 'politiqueConfidentialite'])->name('politique.confidentialite');
Route::get('/reglement-interieur', [LegalController::class, 'reglementInterieur'])->name('reglement.interieur');
Route::get('/reglement-foad', [LegalController::class, 'reglementFoad'])->name('reglement.foad');
Route::get('/protocole-sanitaire', [LegalController::class, 'protocoleSanitaire'])->name('protocole.sanitaire');
Route::get('/demarche-qualite', [LegalController::class, 'demarcheQualite'])->name('demarche.qualite');
});