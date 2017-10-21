<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    protected $fillable = [
        'alexa_id', 'game_id', 'party_code'
    ];

    public function game() {
        return $this->belongsTo('App\Game');
    }

}
