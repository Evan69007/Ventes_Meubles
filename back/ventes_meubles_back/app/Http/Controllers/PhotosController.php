<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Meuble;

class PhotosController extends Controller
{
    /**
     * Afficher la liste des photos d'un meuble.
     */
    public function index($meubleId)
    {
        $photos = Photo::where('meubles_id', $meubleId)->get();
        return response()->json($photos);
    }

    /**
     * Stocker une nouvelle photo pour un meuble.
     */
    public function store(Request $request, $meubleId)
    {
        $request->validate([
            'type' => 'required|string',
            'url' => 'required|string',
        ]);

        $photo = new Photo();
        $photo->meubles_id = $meubleId;
        $photo->type = $request->type;
        $photo->url = $request->url;
        $photo->save();

        return response()->json($photo, 201);
    }
    /**
     * Afficher une photo spécifique.
     */
    public function show($meubleId, $photoId)
    {
        $photo = Photo::where('meubles_id', $meubleId)->findOrFail($photoId);
        return response()->json($photo);
    }

    /**
     * Mettre à jour une photo.
     */
    public function update(Request $request, $meubleId, $photoId)
    {
        $request->validate([
            'type' => 'string',
            'url' => 'string',
        ]);

        $photo = Photo::where('meubles_id', $meubleId)->findOrFail($photoId);
        if ($request->has('type')) {
            $photo->type = $request->type;
        }
        if ($request->has('url')) {
            $photo->url = $request->url;
        }
        $photo->save();

        return response()->json($photo);
    }
    /**
     * Supprimer une photo.
     */
    public function destroy($photoId)
    {
        if (Photo::where('id', $photoId)->exists()) {
            $photo = Photo::find($photoId);
            $photo->delete();
            return response()->json(['message' => 'Photo supprimée']);
        } else {
            return response()->json(['message' => 'Photo introuvable'], 404);
        }
    }
}