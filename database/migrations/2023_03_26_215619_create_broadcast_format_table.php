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
        Schema::create('broadcast_format', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("format");
        });

        $formats = [
            'Text',
            'Email',
            'Text and Email',
        ];

        foreach($formats as $format) {
            DB::table('broadcast_format')->insert([
                'format' => $format,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcast_format');
    }
};
