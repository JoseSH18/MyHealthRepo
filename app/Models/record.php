<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;
    public function medicos()
    {
        return $this->belongsToMany(medico::class);
    }
    public function illnesses()
    {
        return $this->belongsToMany(illness::class);
    }
    public function medicines()
    {
        return $this->belongsToMany(medicine::class);
    }
    public function allergies()
    {
        return $this->belongsToMany(allergy::class);
    }
    public function patient()
    {
        return $this->hasOne(patient::class, 'cedula_paciente');
    }
}
