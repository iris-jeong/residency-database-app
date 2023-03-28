<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    //A user belongs to an access level.
    public function accessLevel() {
        return $this->belongsTo(AccessLevel::class);
    }
    
    //A user has one demographic.
    public function demographic() {
        return $this->hasOne(Demographic::class);
    }

    //A user has one specialty (through the demographics table).
    public function specialty() {
        return $this->hasOneThough(Specialty::class, Demographic::class);
    }

    //A user has one pgy level (through the demographics table).
    public function pgyLevel() {
        return $this->hasOneThrough(PgyLevel::class, Demographic::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
