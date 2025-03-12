<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeublesController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meubles', [MeublesController::class, 'index']);
Route::post('/meubles', [MeublesController::class, 'store']);
Route::get('/meubles/{id}', [MeublesController::class, 'show']);
Route::put('/meubles/{id}', [MeublesController::class, 'update']);
Route::delete('/meubles/{id}', [MeublesController::class, 'destroy']);