<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'alexa_id', 'game_id', 'party_code', 'started', 'ended', 'madlib_id'
    ];

    public function game() {
        return $this->belongsTo('App\Game');
    }

    public function players() {
        return $this->belongsToMany('App\Player', 'party_players');
    }

    public function madlib() {
        return $this->belongsTo('App\Madlib');
    }

}
