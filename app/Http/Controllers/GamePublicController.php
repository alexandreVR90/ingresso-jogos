<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamePublicController extends Controller
{
    public function show(Game $game)
    {
        return view('games.show', compact('game'));
    }
}
