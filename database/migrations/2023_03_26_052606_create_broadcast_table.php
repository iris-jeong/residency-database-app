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
        Schema::create('broadcast', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title", 50);
            $table->string("description", 200);
            $table->boolean("freq_auto");
            $table->integer("freq_count")->nullable();
            $table->integer("freq_period_id")->nullable();
            $table->integer("freq_start_id")->nullable();
            $table->string("message", 200);
            $table->multiLineString("attachments")->nullable(); // each line of the string will be a url to the attachment
            $table->integer("format_id");
            // data types on laravel
            // $table->data_type('column_name');
            //https://laravel.com/docs/8.x/migrations#available-column-types
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('broadcast');
    }
};
