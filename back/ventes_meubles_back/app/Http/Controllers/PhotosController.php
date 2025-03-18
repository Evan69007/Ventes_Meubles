<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Meuble;
use Illuminate\Support\Facades\Storage;

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
    dd('rttrtr');
    $request->validate([
        'type' => 'required|string|in:principale,secondaire',
        'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->file('photo')) {
        $image = $request->file('photo');

        // Générer un nom unique
        $imageName = time() . '_' . $image->getClientOriginalName();

        // Stocker l'image dans storage/app/public/photos/
        $imagePath = $image->storeAs('public/photos', $imageName);

        // Enregistrer en base de données
        $photo = new Photo();
        $photo->meubles_id = $meubleId;
        $photo->type = $request->type;
        $photo->url = str_replace('public/', 'storage/', $imagePath); // Chemin accessible
        $photo->save();

        return response()->json($photo, 201);
    }

    return response()->json(['message' => 'Erreur lors du téléchargement'], 400);
}
/*     public function store(Request $request, $meubleId)
    {
        // Valider l'image
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');

            // Générer un nom unique
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Stocker l'image dans storage/app/public/uploads/
            $imagePath = $image->storeAs('public/uploads', $imageName);

            // Sauvegarder en base de données
            $imageRecord = Image::create([
                'nom' => $imageName,
                'chemin' => str_replace('public/', 'storage/', $imagePath) // Ajuster le chemin
            ]);

            return response()->json(['message' => 'Image uploadée avec succès', 'image' => $imageRecord], 201);
        }

        return response()->json(['message' => 'Échec de l\'upload'], 400);
        // $request->validate([
        //     'type' => 'required|string',
        //     'url' => 'required|string',
        // ]);

        // $photo = new Photo();
        // $photo->meubles_id = $meubleId;
        // $photo->type = $request->type;
        // $photo->url = $request->url;
        // $photo->save();

        // return response()->json($photo, 201);
    } */
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
    $photo = Photo::find($photoId);

    if ($photo) {
        // Supprimer l'image du stockage
        Storage::delete(str_replace('storage/', 'public/', $photo->url));

        // Supprimer de la base de données
        $photo->delete();

        return response()->json(['message' => 'Photo supprimée'], 200);
    }

    return response()->json(['message' => 'Photo introuvable'], 404);
}
   /*  public function destroy($photoId)
    {
        if (Photo::where('id', $photoId)->exists()) {
            $photo = Photo::find($photoId);
            $photo->delete();
            return response()->json(['message' => 'Photo supprimée']);
        } else {
            return response()->json(['message' => 'Photo introuvable'], 404);
        }
    } */
}