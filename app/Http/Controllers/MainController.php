<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index() {
        return view('Index');
    }

    public function LoadJoin() {
        return view('Join');
    }

    public function JoinParty(Request $request) {
        return view('Join');
    }


}
