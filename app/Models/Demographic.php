<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demographic extends Model
{
    use HasFactory;

    protected $fillable = [
        'birth_date',
        'sex',
        'address',
        'city',
        'zip',
        'phone_number',
        'npi_number',
        'pager_number',
        'pgy_level_id',
        'specialty_id',
        'user_id',
    ];

    //A demographic belongs to a user.
    public function user() {
        return $this->belongsTo(User::class, "user_id");
    }

    //A demographic belongs to a specialty.
    public function specialty() {
        return $this->belongsTo(Specialty::class, "specialty_id");
    }

    public function pgyLevel() {
        return $this->belongsTo(PgyLevel::class, "pgy_level_id");
    }
}
