<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meuble;
use Carbon\Carbon;
use App\Models\Photo;

class MeublesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
	{
		// Fetch all Meubles with their photos
		$meubles = Meuble::with('photos')->get();

		return response()->json($meubles);
	}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $meuble = new Meuble();
       $meuble->nom = $request->nom;
       $meuble->type = $request->type;
       $meuble->couleurs = $request->couleurs;
       $meuble->matieres = $request->matieres;
       $meuble->hauteur = $request->hauteur;
       $meuble->largeur = $request->largeur;
       $meuble->profondeur = $request->profondeur;
	   $meuble->quantite = $request->quantite;
       $meuble->prix_ttc = $request->prix_ttc;
       $meuble->statut = $request->statut;
       $meuble->description = $request->description;
       $meuble->etat = $request->etat;
       $meuble->date_mise_en_ligne = $request->date_mise_en_ligne;
       $meuble->created_at = Carbon::now()->toDateTimeString();
       $meuble->save();

       return response()->json($meuble);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $meuble = Meuble::with('photos')->findOrFail($id);
       if(!empty($meuble)){
        return response()->json($meuble);}
       else{
        return response()->json(['message' => 'Meuble introuvable'],404);
       }
    }
	
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Meuble::where('id', $id)->exists()){
            $meuble = Meuble::find($id);
            $meuble->nom = $request->nom;
            $meuble->type = $request->type;
            $meuble->couleurs = $request->couleurs;
            $meuble->matieres = $request->matieres;
            $meuble->hauteur = $request->hauteur;
            $meuble->largeur = $request->largeur;
            $meuble->profondeur = $request->profondeur;
			$meuble->quantite = $request->quantite;
            $meuble->prix_ttc = $request->prix_ttc;
            $meuble->statut = $request->statut;
            $meuble->description = $request->description;
            $meuble->etat = $request->etat;
            $meuble->updated_at = Carbon::now()->toDateTimeString();
            $meuble->save();
            return response()->json($meuble);
        }else{
            return response()->json(['message' => 'Panier introuvable'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Meuble::where('id', $id)->exists()){
            $photos = Photo::where('meubles_id', $id)->get();
            foreach ($photos as $photo) {
                $photo->delete();
            }
            $meuble = Meuble::find($id);
            $meuble->delete();
            return response()->json(['message' => 'Meuble supprimé']);
        }else{
            return response()->json(['message' => 'Meuble introuvable'],404);
        }
    }
}
