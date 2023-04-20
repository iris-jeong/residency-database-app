<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(User::class);
    }
    
    public function files() {
        return $this->belongsToMany(File::class);
    }
}
