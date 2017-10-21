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
            return response()->json([
                'error_message' => "Unable to find the game."
            ], 404);
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


}
