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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('club_crest')->comment('Path to the team logo');
            $table->string('home_stadium');
            $table->string('city_name');
            $table->string('head_coach');
            $table->string('team_lineup')->comment('4-2-3-1');
            $table->timestamps();
        });
        Schema::table('players', function (Blueprint $table) {
            $table->foreignId('team_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropForeign(['team_id']);
            $table->dropColumn('team_id');
        });
        Schema::dropIfExists('teams');
    }
};
