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
        Schema::create('events', function (Blueprint $table) {
            $table->id("event_id");
            $table->string("event_name");
            $table->longText("event_desc");
            $table->longText("event_photo");
            $table->string("event_time");
            $table->string("state");
            $table->unsignedBigInteger('competition_id');
            $table->foreign("competition_id")->references("competition_id")->on("competitions")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('eventfeild_id');
            $table->foreign("eventfeild_id")->references("eventfeild_id")->on("eventfeild")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
