<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotosController;

Route::get('/test', function () {
    return "route works!";
});
Route::get('/meubles/{meubleId}/photos', [PhotosController::class, 'index']);
Route::post('/meubles/{meubleId}/photos', [PhotosController::class, 'store']);
Route::get('/meubles/{meubleId}/photos/{photoId}', [PhotosController::class, 'show']);
Route::delete('/photos/{photoId}', [PhotosController::class, 'destroy']);