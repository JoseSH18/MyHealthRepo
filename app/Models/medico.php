<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    protected $primaryKey = 'codigo';
    use HasFactory;
    public function records()
    {
        return $this->belongsToMany(record::class, 'medico_record', 'record_id', 'medico_id');
    }
    public function appointments()
    {
        return $this->hasMany(appointment::class);
    }
    public function getNombreCompletoAttribute()
    {
        return $this->nombre1 . ' ' . $this->nombre2 . ' ' . $this->apellido1. ' ' . $this->apellido2;
    } 
}
