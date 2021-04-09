<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->belongsToMany(user::class);
    }
}
