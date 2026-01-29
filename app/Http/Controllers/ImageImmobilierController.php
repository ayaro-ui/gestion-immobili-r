<?php

namespace App\Http\Controllers;

use App\Models\ImageImmobilier;
use Illuminate\Http\Request;

class ImageImmobilierController extends Controller
{
    public function store(Request $request) {
        return ImageImmobilier::create($request->all());
    }

    public function destroy($id) {
        ImageImmobilier::destroy($id);
        return response()->json(['message'=>'Image supprimée']);
    }
}
