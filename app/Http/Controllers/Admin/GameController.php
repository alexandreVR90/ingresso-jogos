<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::latest()->paginate(10);
        return view('admin.games.index', compact('games'));
    }

    public function create()
    {
        return view('admin.games.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        Game::create($request->all());

        return redirect()->route('admin.games.index')
            ->with('success', 'Jogo criado com sucesso!');
    }

    public function show(Game $game)
    {
        return view('admin.games.show', compact('game'));
    }

    public function edit(Game $game)
    {
        return view('admin.games.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
        ]);

        $game->update($request->all());

        return redirect()->route('admin.games.index')
            ->with('success', 'Jogo atualizado com sucesso!');
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return redirect()->route('admin.games.index')
            ->with('success', 'Jogo removido com sucesso!');
    }
}
