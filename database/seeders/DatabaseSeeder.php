<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Demographic;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Demographic::truncate();
        
        //Create 300 users in the Users table.
        $users = User::factory(100)->create();

        foreach($users as $user) {
            //Create a demographic record for each user.
            Demographic::factory()->create([
                'user_id' => $user->id //This overrides the 'user_id' attribute in the DemographicFactory definition() method.
            ]);
        }
    }
}
