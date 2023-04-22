<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserLicense;

class UserLicenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create 400 user licenses in the 'user_license' table.
        $userLicenses = UserLicense::factory(800)->create();
    }
}
