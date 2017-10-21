<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Madlib extends Model
{
    protected $fillable = [
        'title', 'num_words', 'json'
    ];
}
