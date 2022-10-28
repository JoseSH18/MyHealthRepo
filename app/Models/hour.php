<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hour extends Model
{

    use HasFactory;
    public function reminder()
    {
        return $this->belongsTo(reminder::class, 'reminder_id');
    }
}
