<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class);
    }
    
    public function tests() {
        return $this->belongsToMany(Test::class);
    }
}
