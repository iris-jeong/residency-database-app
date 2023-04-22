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
        Schema::create('freq_start_from', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("start_from");
        });

        $starts = [
            '6 months before due',
            '5 months before due',
            '4 months before due',
            '3 months before due',
            '2 months before due',
            '1 month before due',
            '2 weeks before due',
            '1 week before due',
            'day of due date',
            'day after due date'
        ];
    
        foreach ($starts as $start) {
            DB::table('freq_start_from')->insert([
                'start_from' => $start,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freq_start_from');
    }
};
