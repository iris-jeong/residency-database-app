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
        DB::table('tests')->delete();
    }
};
