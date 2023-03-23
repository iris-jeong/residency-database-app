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
        //Create 'demographics' table.
        Schema::create('demographics', function (Blueprint $table) {
            $table->id();
            $table->date('birth_date');
            $table->enum('sex', ['Male', 'Female'])->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->integer('zip')->nullable();
            $table->string('phone_number')->nullable();
            $table->integer('npi_number')->nullable();
            $table->string('pager_number')->nullable();
            $table->integer('pgy_level_id');
            $table->integer('specialty_id');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demographics');
    }
};
