<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $games = Game::orderBy('date')->get();
        return view('welcome', compact('games'));
    }
}
