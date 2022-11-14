<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['match_id', 'batting_team_id', 'strike_player_id', 'non_strike_player_id', 
    'over', 'bowler_id', 'out_player_id', 'wicket_taker_id', 'bowling_speed', 'noball', 'wide', 'legby', 'current_score', 'user_id'];

}
