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
        //Add the 'unique' attribute to 'user_id' column to ensure each user only has 1 demographic record.
        Schema::table('demographics', function (Blueprint $table) {
            $table->foreignId('user_id')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Remove the 'unique' attribute from 'user_id' column.
        Schema::table('demographics', function (Blueprint $table) {
            $table->foreignId('user_id')->change();
        });
    }
};
