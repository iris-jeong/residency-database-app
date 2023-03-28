<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessLevel extends Model
{
    use HasFactory;

    //An access level has many users.
    public function users() {
        return $this->belongsTo(User::class);
    }
}
