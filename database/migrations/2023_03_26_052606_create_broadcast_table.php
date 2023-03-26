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
            $table->string("title");
            $table->string("description");
            $table->boolean("freq_auto");
            $table->integer("freq_count");
            $table->integer("freq_period_id");
            $table->integer("freq_start_id");
            $table->string("message");
            $table->multiLineString("attachments"); // each line of the string will be a url to the attachment
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
