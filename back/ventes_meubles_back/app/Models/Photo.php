<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
	use HasFactory;
	/**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'meuble_id',
		'type',
		'url',
    ];
}
