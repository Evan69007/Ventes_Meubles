<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panier;
use Carbon\Carbon;


class PaniersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $panier = Panier::all();
		return response()->json($panier);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $panier = new Panier();
		$panier->meubles_id = $request->meubles_id;
		$panier->created_at = Carbon::now()->toDateTimeString();
		$panier->save();

		return response()->json($panier, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $panier = Panier::find($id);
		if(!empty($panier)){
			return response()->json($panier);
		}
		else{
			return response()->json(['message' => 'Panier introuvable'],404);
		}
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Panier::where('id', $id)->exists())
		{
			$meuble = Panier::find($id);
			$meuble->meubles_id = $request->meubles_id;
			$meuble->updated_at = Carbon::now()->toDateTimeString();
			$meuble->save();
            return response()->json($meuble);
		}
		else{
            return response()->json(['message' => 'Meuble introuvable'],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(Panier::where('id', $id)->exists()){
            $panier = Panier::find($id);
            $panier->delete();
            return response()->json(['message' => 'Panier supprimé']);
        }else{
            return response()->json(['message' => 'Panier introuvable'],404);
        }
    }
}
