<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pressure extends Model
{
    use HasFactory;
    public function record()
    {
        return $this->belongsTo(record::class, 'pressure_id');
    }
}
