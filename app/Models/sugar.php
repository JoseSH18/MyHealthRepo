<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sugar extends Model
{
    use HasFactory;
    public function record()
    {
        return $this->belongsTo(record::class, 'record_id');
    }
}
