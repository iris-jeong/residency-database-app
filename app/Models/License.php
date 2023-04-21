<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;
    
    public function userLicenses() {
        return $this->hasMany(UserLicense::class);
    }

    public function users() {
        return $this->belongsToMany(User::class, 'user_license')->withPivot('expiration_date');
    }
}
