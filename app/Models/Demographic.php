<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    use HasFactory;

    //A demographic belongs to a user.
    public function user() {
        return $this->belongsTo(User::class);
    }

    //A demographic belongs to a specialty.
    public function specialty() {
        return $this->belongsTo(Specialty::class);
    }
}
