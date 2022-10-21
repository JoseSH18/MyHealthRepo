<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class illness extends Model
{
    use HasFactory;
    public function records()
    {
        return $this->belongsToMany(record::class, 'illness_record', 'record_id', 'illness_id');
    }
}
