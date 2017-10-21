<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Party;

class ApiController extends Controller
{
    public function CreateParty(Request $request) {

        $game = Game::where('name', $request->input('game-name'))->first();

        if(is_null($game)) {
            return response(404);
        }

        $party_code = rand(100000, 999999);

        Party::create([
            'alexa_id' => $request->input('alexa-id'),
            'game_id' => $game->id,
            'party_code' => $party_code
        ]);

        return response()->json([
            'party_code' => $party_code
        ]);
    }
}
