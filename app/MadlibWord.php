<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MadlibWord extends Model
{
    protected $fillable = [
        'prompt_idx', 'submitted_word', 'party_id'
    ];
}
