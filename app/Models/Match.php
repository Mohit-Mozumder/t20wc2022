<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = ['team_1', 'team_2', 'schedule', 'description', 'result', 'venue' ];
}
