<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index() {
        return Contrat::with('bien','vendeur','acheteur')->get();
    }

    public function store(Request $request) {
        return Contrat::create($request->all());
    }

    public function show($id) {
        return Contrat::with('paiements')->findOrFail($id);
    }
}
