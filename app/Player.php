<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name'
    ];

    public function parties() {
        return $this->belongsToMany('App/Party', 'party_players');
    }
    
}
