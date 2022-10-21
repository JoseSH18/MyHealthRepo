<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    public function record()
    {
        return $this->hasOne(record::class);
    }

    public function appointments()
    {
        return $this->hasMany(appointment::class);
    }
}
