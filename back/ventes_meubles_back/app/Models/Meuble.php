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

	public function panier(): HasMany
    {
        return $this->hasMany(Panier::class, 'meubles_id');
    }

	public function getPhotosMeubleAttribute()
    {
        $photos_meuble = [];
		$photos_secondaires = [];
        foreach ($this->photos as $photo) {
			if($photo->type == 'principale')
			{
				$photos_meuble[$photo->type] = $photo->url;
			}
			elseif ($photo->type == 'secondaire')
			{
				$photos_secondaires[] = $photo->url;
			}
        }
		$photos_meuble['secondaire'] = $photos_secondaires;
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
		'quantite',
		'prix_ttc',
		'status',
		'description',
		'etat',
		'date_mise_en_ligne',
    ];
}
