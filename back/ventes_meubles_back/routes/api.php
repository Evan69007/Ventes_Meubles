<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeublesController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PaniersController;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

// Route pour l'inscription d'un nouvel utilisateur
Route::post('/register', function (Request $request) {
    // Validation des données entrantes
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6',
    ]);

    // Création et sauvegarde de l'utilisateur
    $newUser = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
    ]);

    // Création d'un token d'accès pour l'utilisateur
    $token = $newUser->createToken('auth_token')->plainTextToken;

    // Retourner l'utilisateur créé avec son token
    return response()->json([
        'user' => $newUser,
        'access_token' => $token,
        'token_type' => 'Bearer',
    ], 201);
});

// Route pour la connexion d'un utilisateur
Route::post('/login', function (Request $request) {
    // Vérification que les données sont bien envoyées
    if (!$request->has(['email', 'password'])) {
        return response()->json(['message' => 'Email and password are required'], 400);
    }

    // Validation des données de connexion
    $credentials = $request->only('email', 'password');

    // Tentative d'authentification
    if (!Auth::attempt($credentials)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    // Récupération de l'utilisateur et génération du token
    $user = Auth::user();
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'token_type' => 'Bearer',
    ]);
});

//Route pour modifier un utilisateur
Route::middleware('auth:sanctum')->put('/user/update', function (Request $request) {
    // Récupérer l'utilisateur authentifié
    $user = $request->user();

    // Vérifier si des données sont envoyées
    if (!$request->hasAny(['name', 'email', 'password'])) {
        return response()->json(['message' => 'No data to update'], 400);
    }

    // Valider les données
    try {
        $validatedData = $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|string|min:6'
        ]);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(['message' => 'Validation failed', 'errors' => $e->errors()], 422);
    }

    // Mise à jour des données
    if (isset($validatedData['name'])) {
        $user->name = $validatedData['name'];
    }
    if (isset($validatedData['email'])) {
        $user->email = $validatedData['email'];
    }
    if (isset($validatedData['password'])) {
        $user->password = Hash::make($validatedData['password']);
    }
    $user->save();

    return response()->json(['message' => 'User updated successfully', 'user' => $user]);
});

// Route pour la déconnexion d'un utilisateur
Route::middleware('auth:sanctum')->post('/logout', function (Request $request) {
    dd($request->all());

    // Suppression des tokens de l'utilisateur
    $request->user()->tokens()->delete();

    return response()->json(['message' => 'User disconnected'], 200);
});

// Route pour récupérer les informations de l'utilisateur authentifié
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return response()->json($request->user());
});

// Routes CRUD pour les meubles
Route::get('/meubles', [MeublesController::class, 'index']);
Route::post('/meubles', [MeublesController::class, 'store']);
Route::get('/meubles/{id}', [MeublesController::class, 'show']);
Route::put('/meubles/{id}', [MeublesController::class, 'update']);
Route::delete('/meubles/{id}', [MeublesController::class, 'destroy']);

// Routes CRUD pour les photos associées aux meubles
Route::prefix('meubles/{meubleId}/photos')->group(function () {
    Route::get('/', [PhotosController::class, 'index']); // Liste des photos
    Route::post('/', [PhotosController::class, 'store']); // Ajouter une photo
    Route::get('/{photoId}', [PhotosController::class, 'show']); // Afficher une photo
    Route::put('/{photoId}', [PhotosController::class, 'update']); // Mettre à jour une photo
    Route::delete('/{photoId}', [PhotosController::class, 'destroy']); // Supprimer une photo
});

// Routes CRUD pour le panier
Route::prefix('/panier')->group(function () {
    Route::get('/', [PaniersController::class, 'index']); // Liste des photos
    Route::post('/', [PaniersController::class, 'store']); // Ajouter une photo
    Route::get('/{panierId}', [PaniersController::class, 'show']); // Afficher une photo
    Route::put('/{panierId}', [PaniersController::class, 'update']); // Mettre à jour une photo
    Route::delete('/{panierId}', [PaniersController::class, 'destroy']); // Supprimer une photo
});
