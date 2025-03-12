<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meuble extends Model
{
	use HasFactory;

	protected $hidden = ['photos'];

	public function photos(): HasMany
    {
        return $this->hasMany(Photo::class, 'meubles_id');
    }

	public function getPhotosMeubleAttribute()
    {
        $photos_meuble = [];
        foreach ($this->photos as $photo) {
            $photos_meuble[$photo->type] = $photo->url;
        }
        return $photos_meuble;
    }

    // Append the custom attribute to the model's JSON output
    protected $appends = ['photos_meuble'];

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
