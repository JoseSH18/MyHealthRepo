<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    public function patient()
    {
        return $this->belongsTo(patient::class, 'cedula_paciente');
    }
    public function medico()
    {
        return $this->belongsTo(medico::class, 'codigo_medico');
    }
}
