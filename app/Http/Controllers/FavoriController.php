<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use Illuminate\Http\Request;

class FavoriController extends Controller
{
    public function index() {
        return Favori::with('bien')->get();
    }

    public function store(Request $request) {
        return Favori::create($request->all());
    }

    public function destroy($id) {
        Favori::destroy($id);
        return response()->json(['message'=>'Favori supprimé']);
    }
}
