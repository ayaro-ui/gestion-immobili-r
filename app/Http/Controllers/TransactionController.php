<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index() {
        return Transaction::all();
    }

    public function store(Request $request) {
        return Transaction::create($request->all());
    }
}
