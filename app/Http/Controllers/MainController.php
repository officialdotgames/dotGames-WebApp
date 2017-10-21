<?php

namespace App\Http\Controllers;

use App\Party;
use App\Player;
use Illuminate\Http\Request;
use Session;
use Validator;

class MainController extends Controller
{
    public function Index() {
        return view('index');
    }

    public function JoinParty(Request $request) {
        $validator = Validator::make($request->all(), [
            'party_code' => 'required|string|max:6',
            'nickname' => 'required|string|max:255',
        ]);

        $party = Party::with('game')->where('party_code', $request->input('party_code'))->first();
        if(is_null($party)){
            return redirect()->back()->withErrors('Error: Invalid room code.');
        }

        $player = Player::create([
          'name' => $request->input('nickname')
        ]);
        $party->players()->attach($player);

        session(['party' => $party]);
        return redirect()
                ->action('MainController@ShowLobby')
                ->with('success', 'Welcome '.$request->input('nickname').'!');
    }

    public function ShowGame($id) {
        return view('game', compact($id));
    }

    public function ShowLobby(){
        $party = session('party');
        if(is_null($party)){
          return redirect()->action('MainController@Index')->withErrors('There was an error joining the party.');
        }
        return view('lobby', compact('party'));
    }
}
