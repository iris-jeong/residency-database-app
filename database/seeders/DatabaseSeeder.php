<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Demographic;
use App\Models\File;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Demographic::truncate();
        File::truncate();
        
        //Create 100 users in the Users table.
        $users = User::factory(100)->create();

        foreach($users as $user) {
            //Create a demographic record for each user.
            Demographic::factory()->create([
                'user_id' => $user->id //This overrides the 'user_id' attribute in the DemographicFactory definition() method.
            ]);
        }

        //Create 300 files in the Files table.
        $files = File::factory(300)->create();
    }
}
