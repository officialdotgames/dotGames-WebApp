<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Lib;
use App\Party;
use App\Player;
use App\MadlibWord;
use App\Madlib;

class ApiController extends Controller
{
    public function CreateParty(Request $request) {

        $game = Game::where('name', $request->input('game_name'))->first();

        if(is_null($game)) {
            return response()->json([
                'error_message' => "Unable to find the game."
            ], 404);
        }

        $party_code = rand(100000, 999999);

        Party::create([
            'alexa_id' => $request->input('alexa_id'),
            'game_id' => $game->id,
            'party_code' => $party_code,
            'started' => 0,
            'ended' => 0,
            'madlib_id' => 3//Madlib::inRandomOrder()->first()->id 
        ]);

        return response()->json([
            'party_code' => $party_code
        ]);
    }

    public function JoinParty(Request $request) {
        // Code, name,
        // returns party id
        $party = Party::where([
            'party_code' => $request->input('party_code'),
            'ended' => 0])->first();

        if(is_null($party)){
            return response()->json([
                'error_message' => 'Unable to find party.'
            ], 404);
        }

        $player = Player::create([
            'name' => $request->input('name')
        ]);

        $party->players()->attach($player->id);

        return $party;

    }

    public function PollParty(Request $request, $id) {
        $party = Party::with('players')->find($id);

        if(is_null($party)) {
            return response()->json([
                'error_message' => 'Unable to find party.'
            ], 404);
        }

        if($party->started == 0) {
            return response()->json([
                'error_message' => 'Party has not started.',
                'players' => $party->players
            ], 400);
        }

        return response()->json([
            'message' => 'No longer need to poll. Game is starting.',
            'players' => $party->players
        ], 200);

    }

    public function StartParty(Request $request) {
        $party = Party::where('alexa_id', $request->input('alexa_id'))->orderBy('id', 'desc')->first();

        if(is_null($party)) {
            return response()->json([
                'error_message' => 'Unable to find party.'
            ], 404);
        }

        $party->started = 1;
        $party->save();

        return response()->json([
            'message' => 'Successfully started the party.'
        ], 200);
    }

    public function ReadMadlib(Request $request) {
        $party = Party::where('alexa_id', $request->input('alexa_id'))->orderBy('id', 'desc')->first();

        if(is_null($party)) {
            return response()->json([
                'error_message' => 'Unable to find party.'
            ], 404);
        }

        $words = MadlibWord::where('party_id', $party->id)->orderBy('prompt_idx')->get();

        $sorted = array();

        foreach ( $words as $word ) {
            $sorted[$word['prompt_idx']][] = $word;
        }

        $selected = [];
        foreach($sorted as $s) {
            array_push($selected, $s[array_rand($s)]->submitted_word);
        } 
       
        $party->ended = 1;
        $party->save(); 

        $madlib = $party->madlib;

        $json = json_decode($madlib->json);
        $out = array('lines' => array());

        $lib_idx = 0;
        foreach($json->lib as $line) {
            while(strpos($line, '[]') !== false) {
                $line = preg_replace('/\[\]/', $selected[$lib_idx], $line, 1);
                $lib_idx += 1;
            }
            array_push($out['lines'], $line);
        }
        
        $lib = Lib::create([
            'party_id' => $party->id,
            'lib' => join('<br>', $out['lines'])
        ]);

        return $out;

    }
}
