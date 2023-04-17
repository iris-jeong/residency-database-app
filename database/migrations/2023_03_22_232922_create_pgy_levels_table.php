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
    //Create 'pgy_levels' table.
    Schema::create('pgy_levels', function (Blueprint $table) {
        $table->id()->startingValue(1);
        $table->string('level');
    });

    //Insert pgy levels data into the table as part of the migration.
    $levels = [
        'PGY 1',
        'PGY 2',
        'PGY 3',
        'PGY 4',
        'PGY 5',
        'PGY 6',
        'PGY 7',
        'Research'
    ];

    foreach ($levels as $level) {
        DB::table('pgy_levels')->insert([
            'level' => $level,
        ]);
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pgy_levels');
    }
};
