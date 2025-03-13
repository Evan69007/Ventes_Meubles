<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Panier extends Model
{
    use hasFactory;

	/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'meubles_id',
    ];

	public function meuble(): BelongsTo
    {
        return $this->belongsTo(Meuble::class, 'meubles_id');
    }
}
