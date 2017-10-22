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

        $madlibs1 = Madlib::create([
            'id' => 2,
            'created_at' => NULL,
            'updated_at' => NULL,
            'title' => 'Battle of Rohan',
            'num_prompts' => 22,
            'json' => "{\"title\":\"Battle of Rohan\",\"prompts\":[\"VERB\",\"NOUN\",\"VERB\",\"NOUN\",\"RELATIVE\",\"PLACE\",\"BODY PART\",\"EMOTION\",\"BODY PART\",\"TIME PERIOD\",\"ATTRIBUTE\",\"NOUN\",\"VERB\",\"NOUN (PLURAL)\",\"TIME PERIOD\",\"NOUN (PLURAL)\",\"NOUN\",\"VERB ENDING IN 'ING'\",\"VERB\",\"ADJECTIVE\",\"ADJECTIVE\",\"VERB\"],\"lib\":[\"[] your [] - [] your []!\",\"[] of [] - Rohan. . . my brothers!\",\"I see in your [] the same [] that would take the [] of me.\",\"The [] may come when the [] of [] fails;\",\"when we [] our [] and break all bonds of fellowship;\",\"but it is not this day - an [] of [] and shattered shields,\",\"when the Age of [] come [] down - but it is not this day!!!\",\"This day we []!\",\"By all that you hold [] on this [] earth - I bit you []!\"]}\r\n"
        ]);

        $madlibs2 = Madlib::create([
            'id' => 3,
            'created_at' => NULL,
            'updated_at' => NULL,
            'title' => 'Be Kind',
            'num_prompts' => 6,
            'json' => "{\"title\":\"Be Kind\",\"prompts\":[\"NOUN\",\"NOUN (PLURAL)\",\"NOUN\",\"PLACE\",\"ADJECTIVE\",\"NOUN\"],\"lib\":[\"Be kind to your []-footed []\",\"For a duck may be somebody's [],\",\"Be kind to your [] in []\",\"Where the weather is always [].\",\"You may think that this is the [],\",\"Well it is.\"]}\r\n"
        ]);

        $madlibs3 = Madlib::create([
            'id' => 4,
            'created_at' => NULL,
            'updated_at' => NULL,
            'title' => 'Letter to a friend',
            'num_prompts' => 17,
            'json' => "{\"title\":\"Letter to a Friend\",\"prompts\":[\"RELATIVE\",\"ADJECTIVE\",\"ADJECTIVE\",\"ADJECTIVE\",\"NAME OF PERSON IN ROOM\",\"ADJECTIVE\",\"ADJECTIVE\",\"VERB ENDING IN 'ED'\",\"BODY PART\",\"VERB ENDING IN 'ING'\",\"NOUN (PLURAL)\",\"NOUN\",\"ADVERB\",\"VERB\",\"VERB\",\"RELATIVE\",\"NAME OF PERSON IN ROOM\"],\"lib\":[\"Dear [],\",\"I am having a [] time at camp.\",\"The counselour is [] and the food is [].\",\"I met [] and we became [] friends.\",\"Unfortunately, [] is [] and I [] my [] so we couldn't go [] like everybody else.\",\"I need more [] and a [] sharpener, so please [] [] more when you [] back.\",\"Your []\",\"[]\"]}\r\n"
        ]);

        $madlibs4 = Madlib::create([
            'id' => 5,
            'created_at' => NULL,
            'updated_at' => NULL,
            'title' => 'Romeo and Juliet',
            'num_prompts' => 11,
            'json' => "{\"title\":\"Romeo and Juliet\",\"prompts\":[\"NOUN (PLURAL)\",\"PLACE\",\"NOUN\",\"NOUN (PLURAL)\",\"NOUN\",\"ADJECTIVE\",\"VERB\",\"NUMBER\",\"ADJECTIVE\",\"BODY PART\",\"VERB\"],\"lib\":[\"Two [], both alike in dignity,\",\"In fair [], where we lay our scene,\",\"From ancient [] break to new mutiny,\",\"Where civil blood makes civil hands unclean.\",\"From forth the fatal loins of these two foes\",\"A pair of star-cross'd [] take their life;\",\"Whole misadventured piteous overthrows\",\"Do with their [] bury their parents' strife.\",\"The fearful passage of their [] love,\",\"And the continuance of their parents' rage,\",\"Which, but their children's end, nought could [],\",\"Is now the [] hours' traffic of our stage;\",\"The which if you with [] [] attend,\",\"What here shall [], our toil shall strive to mend.\"]}\r\n"
        ]);
    }
}
