<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    protected $primaryKey = 'cedula';
    use HasFactory;
    public function record()
    {
        return $this->belongsTo(record::class);
    }

    public function appointments()
    {
        return $this->hasMany(appointment::class);
    }

    public function getNombreCompletoAttribute()
    {
        return $this->nombre1 . ' ' . $this->nombre2 . ' ' . $this->apellido1. ' ' . $this->apellido2;
    } 
    public function user()
    {
        return $this->hasOne(User::class, 'correo');
    }
}
