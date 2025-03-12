<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
	use HasFactory;
	/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'meubles_id',
		'type',
		'url',
    ];

	

	public function meuble(): BelongsTo
    {
        return $this->belongsTo(Meuble::class, 'meubles_id');
    }
}
