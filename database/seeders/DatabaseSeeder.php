<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Demographic;
use App\Models\File;
use App\Models\UserTest;
use App\Models\UserLicense;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key constraints
        // DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // File::truncate();
        // Re-enable foreign key constraints
        // DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        //Comment and uncomment the calls to run specific seeders as needed.
        //If seeding from fresh, uncomment all.

        // $this->call(UsersTableSeeder::class);
        // $this->call(DemographicsTableSeeder::class);
        // $this->call(FilesTableSeeder::class);
        // $this->call(UserTestTableSeeder::class);
        // $this->call(UserLicenseTableSeeder::class);
    }
}
