<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Party;
use App\Player;

class ApiController extends Controller
{
    public function CreateParty(Request $request) {

        $game = Game::where('name', $request->input('game_name'))->first();

        if(is_null($game)) {
            return response(404);
        }

        $party_code = rand(100000, 999999);

        Party::create([
            'alexa_id' => $request->input('alexa_id'),
            'game_id' => $game->id,
            'party_code' => $party_code
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
            return response(404);
        }

        $player = Player::create([
            'name' => $request->input('name')
        ]);

        $party->players()->attach($player->id);

        return $party;

    }

    public function PollParty(Request $request, $id) {
        $party = Party::find($id);

        if(is_null($party)) {
            return response(404);
        }

        if($party->started == 0) {
            return response(400);
        }

        return response(200);

    }

    public function StartParty(Request $request) {
        $party = Party::where('alexa_id', $request->input('alexa_id'))->first();

        if(is_null($party)) {
            return response(404);
        }

        $party->started = 1;
        $party->save();

        return response(200);
    }

    public function ReadMadlib(Request $request) {
       $party = Party::where('alexa_id', $request->input('alexa_id'))->first();

        if(is_null($party)) {
            return response(404);
        }

       $party->ended = 1;
       $party->save();

        return response()->json([
            'lines' => [
                'Be kind to your Dog-footed Carrots', 
                'For a duck may be somebody`s Jim Carrey,',
                'Be kind to your Carrots in Topeka',
                'Where the weather is always Tiny.',
                'You may think that this is the Nigel Thornberry,',
                'Well it is.'
            ]
        ]);

    }
}
