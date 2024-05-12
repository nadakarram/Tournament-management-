<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**create_competitions_tablec
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id("team_id");
            $table->string("team_name")->unique();
            $table->integer("number_of_member")->default(5);
            $table->string("email1")->unique();
            $table->string("email2")->unique();
            $table->string("email3")->unique();
            $table->string("email4")->unique();
            $table->string("email5")->unique();
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
        Schema::dropIfExists('teams');
    }
};
