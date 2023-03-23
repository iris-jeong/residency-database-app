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
        //Create 'licenses' table.
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        //Insert licenses data into the table as part of the migration.
        $licenses = [
            'ACLS',
            'ATLS',
            'BLS',
            'CML',
            'DEA',
            'FCCS',
        ];

        foreach($licenses as $license) {
            DB::table('licenses')->insert([
                'name' => $license,
            ]);
        };
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licenses');
    }
};
