<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('freq_period', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("period");
        });

        $periods = [
            'day',
            'week',
            'month',
            'year',
        ];
    
        foreach ($periods as $period) {
            DB::table('freq_period')->insert([
                'period' => $period,
            ]);
        }
        
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freq_period');
    }
};
