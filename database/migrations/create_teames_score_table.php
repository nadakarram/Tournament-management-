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
        Schema::create('teames_score', function (Blueprint $table) {
            $table->id("score_id");
            $table->integer("score_points");
            $table->unsignedBigInteger('event_id');
            $table->foreign("event_id")->references("event_id")->on("events")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('team_id');
            $table->foreign("team_id")->references("team_id")->on("teams")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('competition_id');
            $table->foreign("competition_id")->references("competition_id")->on("teams")->cascadeOnUpdate()->cascadeOnDelete();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teames_score');
    }
};
