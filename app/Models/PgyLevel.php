<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PgyLevel extends Model
{
    use HasFactory;

    //A PGY Level has many users.
    public function users() {
        return $this->hasMany(User::class);
    }
}
