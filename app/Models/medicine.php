<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;
    public function records()
    {
        return $this->belongsToMany(record::class, 'medicine_records', 'record_id', 'medicine_id');
    }
    public function reminders()
    {
        return $this->hasMany(reminder::class);
    }
}
