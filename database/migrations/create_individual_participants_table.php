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
        Schema::create('individual_participants', function (Blueprint $table) {
            $table->id("individual_participant_id");
          
            $table->string("indvidual_name")->unique();
            
            $table->string("email1")->unique();
            $table->unsignedBigInteger('competition_id');
            $table->foreign("competition_id")->references("competition_id")->on("competitions")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individual_participants');
    }
};
