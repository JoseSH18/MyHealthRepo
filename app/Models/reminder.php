<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reminder extends Model
{
    public function medicine()
    {
        return $this->belongsTo(medicine::class, 'medicamento_id');
    }
    public function record()
    {
        return $this->belongsTo(record::class, 'expediente_id');
    }

    public function hours()
    {
        return $this->hasMany(hour::class);
    }
    public function days()
    {
        return $this->hasMany(day::class);
    }
    use HasFactory;
}
