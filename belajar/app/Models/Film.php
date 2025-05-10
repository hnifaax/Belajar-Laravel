<?php

namespace App\Models;

use App\Models\Director;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Film extends Model
{
    use HasFactory;

    protected $fillable  = [
        'judul', 
        'sinopsis',
        'tahun',
        'rating',
        'image',
        'link',
        'directors_id'
    ];

    public function director()
    {
        return $this->belongsTo(Director::class, 'directors_id', 'id');
    }
   
}