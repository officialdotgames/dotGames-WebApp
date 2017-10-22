<?php

use Illuminate\Database\Seeder;
use App\Madlib;

class madlibsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $madlibs = Madlib::create([
            'id' => 1,
            'created_at' => NULL,
            'updated_at' => NULL,
            'title' => 'Autobiography',
            'num_prompts' => 16,
            'json' => "{\"title\":\"Autobiography\",\"prompts\":[\"ADJECTIVE\",\"VERB ENDING IN 'ED'\",\"NOUN (PLURAL)\",\"LIQUID\",\"NOUN (PLURAL)\",\"FAMOUS PERSON\",\"PLACE\",\"OCCUPATION\",\"NOUN\",\"NATIONALITY\",\"FEMALE CELEBRITY\",\"NOUN\",\"FEMALE FRIEND\",\"NOUN (PLURAL)\",\"NUMBER\",\"ADJECTIVE\"],\"lib\":[\"I enjoy long, [] walks on the beach,\",\"getting [] in the rain and serendipitous encounters with [].\",\"I really like pi\u00F1a coladas mixed with [], and romantic, candle-lit [].\",\"I am well-read from Dr. Seuss to [].\",\"I travel frequently, especially to [], when I am not busy with work.\",\"(I am a [].)\",\"I am looking for [] and beauty in the form of a [] goddess.\",\"She should have the physique of [] and the [] of [].\",\"I would prefer if she knew how to cook, clean, and wash my [].\",\"I know I'm not very attractive in my picture, but it was taken [] days ago,\",\"and I have since become more [].\"]}"
        ]);
    }
}
