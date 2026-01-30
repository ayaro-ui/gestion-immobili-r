<?php

use App\Http\Controllers\{
    UserController,
    UtilisateurController,
    BienImmobilierController,
    ImageImmobilierController,
    ContratController,
    PaiementController,
    TransactionController,
    FavoriController,
    ContactController,
    RoleController
};

Route::apiResource('users', UserController::class);
Route::apiResource('utilisateurs', UtilisateurController::class);
Route::apiResource('biens', BienImmobilierController::class);
Route::post('images', [ImageImmobilierController::class, 'store']);
Route::apiResource('contrats', ContratController::class);
Route::post('paiements', [PaiementController::class, 'store']);
Route::apiResource('transactions', TransactionController::class);
Route::apiResource('favoris', FavoriController::class);
Route::post('contact', [ContactController::class, 'store']);
Route::apiResource('roles', RoleController::class);