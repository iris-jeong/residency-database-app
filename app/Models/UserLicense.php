<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLicense extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'license_id', 'file_id', 'expiration_date'];

    protected $table = 'user_license';

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function license() {
        return $this->belongsTo(License::class);
    }

    public function file() {
        return $this->belongsTo(File::class);   
    }


}
