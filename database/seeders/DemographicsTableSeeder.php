<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Demographic;
use App\Models\User;



class DemographicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create a demographic record for each user.
        User::all()->each(function ($user) {
            Demographic::factory()->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
