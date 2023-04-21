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
        //Create 'tests' table.
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        $tests = [
            "ABSITE",
            "CARSITE",
            "PSITE",
            "TACC",
            "TSITE",
            "VSITE"
        ];

        foreach ($tests as $test) {
            DB::table('tests')->insert([
                'name' => $test,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
