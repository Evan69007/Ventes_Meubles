<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Meuble extends Model
{
	use HasFactory;
	/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nom',
        'type',
        'couleurs',
		'matieres',
		'hauteur',
		'largeur',
		'profondeur',
		'prix_ttc',
		'status',
		'description',
		'etat',
		'date_mise_en_ligne',
    ];
}
