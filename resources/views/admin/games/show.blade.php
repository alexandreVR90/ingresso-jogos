@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8 bg-white dark:bg-gray-800 rounded shadow">
    <h1 class="text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">Detalhes do jogo</h1>

    <div class="space-y-4 text-gray-900 dark:text-gray-100">
        <div>
            <h2 class="font-semibold text-lg">Título:</h2>
            <p>{{ $game->title }}</p>
        </div>

        <div>
            <h2 class="font-semibold text-lg">Descrição:</h2>
            <p>{{ $game->description ?? '-' }}</p>
        </div>

        <div>
            <h2 class="font-semibold text-lg">Data:</h2>
            <p>{{ $game->date->format('d/m/Y') }}</p>
        </div>

        <div>
            <h2 class="font-semibold text-lg">Local:</h2>
            <p>{{ $game->location }}</p>
        </div>
    </div>

    <div class="mt-8 flex space-x-4">
        <a href="{{ route('admin.games.edit', $game) }}" 
           class="px-5 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700 transition">Editar</a>
        <form action="{{ route('admin.games.destroy', $game) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este jogo?');">
            @csrf
            @method('DELETE')
            <button type="submit" 
                class="px-5 py-2 bg-red-600 text-white rounded hover:bg-red-700 transition">Excluir</button>
        </form>
        <a href="{{ route('admin.games.index') }}" 
           class="px-5 py-2 bg-gray-600 text-white rounded hover:bg-gray-700 transition">Voltar</a>
    </div>
</div>
@endsection
