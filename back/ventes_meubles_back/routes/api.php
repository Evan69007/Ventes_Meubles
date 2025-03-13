<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeublesController;
use App\Http\Controllers\PhotosController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meubles', [MeublesController::class, 'index']);
Route::post('/meubles', [MeublesController::class, 'store']);
Route::get('/meubles/{id}', [MeublesController::class, 'show']);
Route::put('/meubles/{id}', [MeublesController::class, 'update']);
Route::delete('/meubles/{id}', [MeublesController::class, 'destroy']);

Route::prefix('meubles/{meubleId}/photos')->group(function () {
    Route::get('/', [PhotosController::class, 'index']); // Liste des photos
    Route::post('/', [PhotosController::class, 'store']); // Ajouter une photo
    Route::get('/{photoId}', [PhotosController::class, 'show']); // Afficher une photo
    Route::put('/{photoId}', [PhotosController::class, 'update']); // Mettre à jour une photo
    Route::delete('/{photoId}', [PhotosController::class, 'destroy']); // Supprimer une photo
});