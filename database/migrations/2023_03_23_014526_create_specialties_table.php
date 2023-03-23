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
        //Create 'specialties' table.
        Schema::create('specialties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        //Insert specialties data into the table as part of the migration.
        $specialties = [
            'Abdominal Transplant',
            'Advanced GI MIS',
            'Breast Oncology',
            'Cardiothoracic',
            'Colorectal',
            'General',
            'Hepatobiliary',
            'Plastics & Reconstructive',
            'Surgical & Critical Care',
            'Trauma',
            'Vascular',
        ];

        foreach($specialties as $specialty) {
            DB::table('specialties')->insert([
                'name' => $specialty,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specialties');
    }
};
