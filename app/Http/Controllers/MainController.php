<?php

namespace App\Http\Controllers;

use App\Party;
use App\Player;
use App\Madlib;
use App\MadlibWord;
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

        session( [ 'party' => $party ] );

        return redirect('lobby')
                    ->with('success', 'Welcome '.$request->input('nickname').'!');
    }



    public function ShowGame() {
        $party = session( 'party' );
        $prompt_index = session('prompt_index');


        $prompt = $this->GetPromptString($party->madlib_id, $prompt_index);

        $party_id = $party->id;

        return view('game', compact('party_id', 'prompt_index', 'prompt'));
    }

    public function SubmitMadLib(Request $request) {


        $validator = Validator::make($request->all(), [
            'party_id' => 'required|integer|max:12',
            'madLib' => 'required|string|max:255',
            'prompt_index' => 'required|integer|max:12'
        ]);



        $party = Party::find($request->input('party_id'));
        if(is_null($party)){
            return redirect()->back()->withErrors('Error: Party does not exist.');
        }


        MadlibWord::create([
            'prompt_idx' => $request->input('prompt_index'),
            'submitted_word' => $request->input('madLib'),
            'party_id' => $party->id
        ]);

        $prompt_index = $request->input('prompt_index');

        if($prompt_index >= $party->madlib->num_prompts -1) {
            return redirect('end')->with('success', "You've entered all of the words. Once everyone is finished, ask Alexa to 'read lib'.");
        } else {

            session([ 'prompt_index' => $prompt_index + 1,
                    'party' => $party ] );

        return redirect('game')->with('success', 'Submitted word!');
        }
    }

    private function GetPromptString($madLibId, $promptIndex) {
        $madlib = MadLib::find($madLibId);
        $json = json_decode($madlib->json);

        return $json->prompts[$promptIndex];
    }

    public function ShowLobby() {
        $party = session('party');
        session( [ 'prompt_index' => 0 ] );
        if(is_null($party)){
          return redirect()->action('MainController@Index')->withErrors('There was an error joining the party.');
        }
        return view('lobby', compact('party'));
    }
}
