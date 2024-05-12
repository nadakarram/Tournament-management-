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
        Schema::create('individuals_score', function (Blueprint $table) {
            $table->id("score_id");
            $table->string("score_point");
            $table->unsignedBigInteger('event_id');
            $table->foreign("event_id")->references("event_id")->on("events")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('individual_participant_id');
            $table->foreign("individual_participant_id")->references("individual_participant_id")->on("individual_participants")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('competition_id');
            $table->foreign("competition_id")->references("competition_id")->on("individual_participants")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individuals_score');
    }
};
