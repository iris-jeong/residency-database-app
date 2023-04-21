<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    use HasFactory;

    protected $table = 'user_test';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function file()
    {
        return $this->belongsTo(File::class);
    }
    
    protected $fillable = [
        'user_id',
        'test_id',
        'file_id',
        'score',
    ];
}
