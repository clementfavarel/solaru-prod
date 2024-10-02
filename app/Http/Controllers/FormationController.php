<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::with('modalites')->get();
        return view('formations.index', compact('formations'));
    }

    public function show($id)
    {
        $formation = Formation::with('modalites')->findOrFail($id);
        return view('formations.show', compact('formation'));
    }

}
