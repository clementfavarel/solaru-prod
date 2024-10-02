<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function mentionsLegales()
    {
        return view('legal.mentions-legales');
    }

    public function conditionsGenerales()
    {
        return view('legal.conditions-generales');
    }

    public function politiqueConfidentialite()
    {
        return view('legal.politique-confidentialite');
    }

    public function reglementInterieur()
    {
        return view('legal.reglement-interieur');
    }

    public function reglementFoad()
    {
        return view('legal.reglement-foad');
    }

    public function protocoleSanitaire()
    {
        return view('legal.protocole-sanitaire');
    }

    public function demarcheQualite()
    {
        return view('legal.demarche-qualite');
    }
}
