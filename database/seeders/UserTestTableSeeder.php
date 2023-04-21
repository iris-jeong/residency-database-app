<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserTest;

class UserTestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create a user_test record for each user.
        UserTest::factory()->create([
            'user_id' => $user->id 
        ]);
    }
}
