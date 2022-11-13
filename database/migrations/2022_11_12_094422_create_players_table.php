<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('born');
            $table->string('birthplace');
            $table->string('batting_style');
            $table->string('bowling_style');
            $table->integer('icc_ranking_batting');
            $table->integer('icc_ranking_bowling');
            $table->integer('total_match');
            $table->integer('innings');
            $table->integer('total_runs');
            $table->float('batting_average');
            $table->integer('50s');
            $table->integer('100s');
            $table->string('career_best_batting');
            $table->integer('out_player_id');
            $table->integer('wicket_taker_id');
            $table->integer('5_wickets');
            $table->float('economy');
            $table->string('career_best_bowling');
            $table->string('photo')->nullable();
            $table->string('career');
            $table->integer('current_score');
            $table->integer('team_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
