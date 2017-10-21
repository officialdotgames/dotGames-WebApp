<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MadlibWord extends Model
{
    protected $fillable = [
        'word_idx', 'submitted_word', 'party_id'
    ];
}
