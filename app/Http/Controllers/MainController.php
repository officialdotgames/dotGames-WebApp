<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Index() {
        return view('index');
    }

    public function LoadJoin() {
        return view('join');
    }

    public function JoinParty(Request $request) {
        return view('join');
    }


}
