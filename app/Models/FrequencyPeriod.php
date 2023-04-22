<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequencyPeriod extends Model
{
    use HasFactory;
    // Formats have many broadcasts
    public function broadcasts() {
        return $this->hasMany(Broadcasts::class);
    }
}
