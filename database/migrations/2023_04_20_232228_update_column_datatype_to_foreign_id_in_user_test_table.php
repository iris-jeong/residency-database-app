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
        Schema::table('user_test', function (Blueprint $table) {
            $table->foreignId('user_id')->change();
            $table->foreignId('test_id')->change();
            $table->foreignId('file_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_test', function (Blueprint $table) {
            $table->integer('user_id')->change();
            $table->integer('test_id')->change();
            $table->integer('file_id')->change();
        });
    }
};
