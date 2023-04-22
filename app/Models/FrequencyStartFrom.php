<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequencyStartFrom extends Model
{
    use HasFactory;
    public $table = 'freq_start_from';
    // Formats have many broadcasts
    public function broadcasts() {
        return $this->hasMany(Broadcasts::class);
    }
}
