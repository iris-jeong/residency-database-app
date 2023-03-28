<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgyLevel extends Model
{
    use HasFactory;

    //A pgy level has many demographics.
    public function demographics() {
        return $this->hasMany(Demographic::class);
    }

    //A pgy level has many users (through the demographics table).
    public function users() {
        return $this->hasManyThrough(User::class, Demographic::class);
    }
}
