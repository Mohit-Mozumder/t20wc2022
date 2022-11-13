<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'born', 'birthplace', 'batting_style', 'bowling_style', 
    'icc_ranking_batting', 'icc_ranking_bowling', 'total_match', 'innings', 'total_runs', 
    'batting_average', '50s', '100s', 'career_best_batting', 'out_player_id', 'wicket_taker_id', '5_wickets', 'economy', 
    'career_best_bowling', '50s', 'photo', 'career', 'current_score', 
    'team_id'];
}
