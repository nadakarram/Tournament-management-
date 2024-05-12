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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id("competition_id");
            $table->string("competition_name");
            $table->longText("competition_desc");
            $table->string("state");
            $table->string("competition_type");
            $table->string("competition_photo",1200);
            $table->string("start_data");
            $table->string("end-date");
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competitions');
    }
};
