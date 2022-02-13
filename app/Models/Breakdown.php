<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breakdown extends Model
{
    use HasFactory;

    public function random()
        {
            return $this->belongsTo(Random::class, 'id', 'random_id');
        }
    
}
