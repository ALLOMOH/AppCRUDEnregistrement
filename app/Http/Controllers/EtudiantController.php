<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function indexGetData()
    {
        $etudiant = Etudiant::all();

        return response()->json($etudiant);
    }
    public function store(Request $request)
    {
        $etudiant = Etudiant::create($request->all());

        return response()->json($etudiant);
    }
}
