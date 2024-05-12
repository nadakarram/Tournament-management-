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
        Schema::create('request', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('email')->unique();
            $table->string('request');
            $table->string("phone_number");
            $table->integer("user_age");
            $table->string("user_gender");
            $table->unsignedBigInteger('competition_id');
            $table->foreign("competition_id")->references("competition_id")->on("competitions")->cascadeOnUpdate()->cascadeOnDelete();
            $table->unsignedBigInteger('event_id');
            $table->foreign("event_id")->references("event_id")->on("events")->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request');
    }
};
