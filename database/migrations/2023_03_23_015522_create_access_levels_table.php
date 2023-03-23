<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Create 'access_levels' table.
        Schema::create('access_levels', function (Blueprint $table) {
            $table->id();
            $table->string('access');
        });

        //Insert access levels data into the table as part of the migration.
        $accessLevels = [
            'Superadmin',
            'Admin',
            'Resident',
        ];

        foreach($accessLevels as $accessLevel) {
            DB::table('access_levels')->insert([
                'access' => $accessLevel,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('access_levels');
    }
};
