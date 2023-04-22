<?php

namespace Database\Seeders;

use App\Models\Broadcasts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AutomatedBroadcastTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create 10 broadcasts
        Broadcasts::factory(10)->create();
    }
}
