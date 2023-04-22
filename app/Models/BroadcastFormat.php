<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Broadcasts;

class BroadcastFormat extends Model
{
    use HasFactory;

    // Formats have many broadcasts
    public function broadcasts() {
        return $this->hasMany(Broadcasts::class);
    }
}
