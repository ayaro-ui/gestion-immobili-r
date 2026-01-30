<?php

namespace App\Http\Controllers;

use App\Models\BienImmobilier;
use Illuminate\Http\Request;

class BienImmobilierController extends Controller
{
    public function index() {
        return BienImmobilier::with('images','vendeur')->get();
    }

    public function store(Request $request) {
        return BienImmobilier::create($request->all());
    }

    public function show($id) {
        return BienImmobilier::with('images','vendeur')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $bien = BienImmobilier::findOrFail($id);
        $bien->update($request->all());
        return $bien;
    }

    public function destroy($id) {
        BienImmobilier::destroy($id);
        return response()->json(['message'=>'Bien supprimé']);
    }
}
