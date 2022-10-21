<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allergy extends Model
{
    use HasFactory;
    public function records()
    {
        return $this->belongsToMany(record::class, 'allergy_record', 'record_id', 'allergy_id');
    }
}
