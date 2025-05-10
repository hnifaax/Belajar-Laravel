<?php

namespace App\Models;

use App\Models\Merchandise;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartDetail extends Model
{
    use HasFactory;
    
    public function merch()
    {
        return $this->belongsTo(Merchandise::class, 'merch_id', 'id');
    }
}
