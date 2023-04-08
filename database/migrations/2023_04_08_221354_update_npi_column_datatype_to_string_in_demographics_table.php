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
        //Update the 'npi_number' column's datatype to 'string'.
        Schema::table('demographics', function (Blueprint $table) {
            $table->string('npi_number')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //Revert the 'npi_number' column's datatype back to 'integer'.
        Schema::table('demographics', function (Blueprint $table) {
            $table->integer('npi_number')->change();
        });
    }
};
