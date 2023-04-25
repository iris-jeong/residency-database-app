<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function tests() {
        return $this->belongsToMany(Test::class);
    }

    public function userLicenses() {
        return $this->hasMany(UserLicense::class);
    }

    public function license() {
        return $this->belongsTo(License::class);
    }
}
