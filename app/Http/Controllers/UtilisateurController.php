<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UtilisateurController extends Controller
{
    public function index() {
        return Utilisateur::with('role')->get();
    }

    public function store(Request $request) {
        $request['mot_de_passe'] = Hash::make($request->mot_de_passe);
        return Utilisateur::create($request->all());
    }

    public function show($id) {
        return Utilisateur::with('role')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $user = Utilisateur::findOrFail($id);
        if ($request->mot_de_passe) {
            $request['mot_de_passe'] = Hash::make($request->mot_de_passe);
        }
        $user->update($request->all());
        return $user;
    }

    public function destroy($id) {
        Utilisateur::destroy($id);
        return response()->json(['message'=>'Utilisateur supprimé']);
    }
}
