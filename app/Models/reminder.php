<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reminder extends Model
{
        public function patient()
    {
        return $this->belongsTo(patient::class, 'cedula_paciente');
    }
    public function record()
    {
        return $this->belongsTo(record::class, 'record_id');
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
